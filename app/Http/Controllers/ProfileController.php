<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Services\StripeService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Service;
use Illuminate\Support\Facades\DB; // Assurez-vous d'importer DB

class ProfileController extends Controller
{
    protected $stripeService;

    public function __construct(StripeService $stripeService)
    {
        $this->stripeService = $stripeService;
    }

    public function index(Request $request): View
    {
        $user = $request->user();
        $hasActiveSubscription = $this->stripeService->hasActiveSubscription($user->stripe_id);
    
        // Passez le nombre de tags ici si nécessaire
        $tagCount = DB::table('service_tag')
            ->join('services', 'service_tag.service_id', '=', 'services.id')
            ->where('services.user_id', $user->id)
            ->count('service_tag.tag_id');
    
        return view('profile.index', [
            'user' => $user,
            'hasActiveSubscription' => $hasActiveSubscription,
            'tagCount' => $tagCount,
        ]);
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.index')->with('status', 'profile-updated');
    }

    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    
    public function show($username)
    {
        // Trouver l'utilisateur par le nom d'utilisateur
        $user = User::where('name', $username)->firstOrFail();
    
        // Trouver le service associé à cet utilisateur
        $service = Service::where('user_id', $user->id)->first();
    
        // Compter le nombre de tags associés aux services de l'utilisateur
        $tagCount = DB::table('service_tag')
            ->join('services', 'service_tag.service_id', '=', 'services.id')
            ->where('services.user_id', $user->id)
            ->count('service_tag.tag_id');
    
        // Passer l'utilisateur, le service et le nombre de tags à la vue
        return view('pagepro', compact('user', 'service', 'tagCount'));
    }
}

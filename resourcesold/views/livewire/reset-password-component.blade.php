<form class="mt-2" wire:submit.prevent="changePassword" method="POST">
    @csrf
    <div class="mb-1">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="login-password">Nouveau mot de passe</label>
        </div>
        <div class="input-group input-group-merge form-password-toggle">
            <input class="form-control form-control-merge" id="login-password" type="password" wire:model="password" placeholder="············" aria-describedby="login-password" tabindex="2" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>

        </div>
        @error('password') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror

    </div>
    <div class="mb-1">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="confirm-password">Confirmer mot de passe</label>
        </div>
        <div class="input-group input-group-merge form-password-toggle">
            <input class="form-control form-control-merge" id="confirm-password" type="password" wire:model="password_confirmation" placeholder="············" aria-describedby="confirm-password" tabindex="2" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>

        </div>
        @error('password_confirmation') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror

    </div>

    <button class="btn btn-success w-100" type="submit">Changer mot de passe</button>
</form>
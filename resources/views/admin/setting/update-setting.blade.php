<form wire:submit.prevent="submit">
    @if (session('setting'))
        <div class="alert alert-primary my-success-alert">
            {{ session('setting') }}
        </div>
    @endif
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
        <div class="col-sm-10">
            <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                <input type="text" class="form-control" id="basic-icon-default-fullname"
                    placeholder="Abdelrahman Khedr" aria-label="Abdelrahman Khedr"
                    aria-describedby="basic-icon-default-fullname2" wire:model="setting.name" />
            </div>
            <small class="text-danger">
                @error('setting.name')
                    {{ $message }}
                @enderror
            </small>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-icon-default-address">address</label>
        <div class="col-sm-10">
            <div class="input-group input-group-merge">
                <span id="basic-icon-default-address2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                <input type="text" id="basic-icon-default-address" class="form-control" placeholder="Qaranshow"
                    aria-label="Qaranshow" aria-describedby="basic-icon-default-address2"
                    wire:model="setting.address" />
            </div>
            <small class="text-danger">
                @error('setting.address')
                    {{ $message }}
                @enderror
            </small>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
        <div class="col-sm-10">
            <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input type="text" id="basic-icon-default-email" class="form-control"
                    placeholder="AbdelrahmanKhedr@gmail.com" aria-label="AbdelrahmanKhedr@gmail.com"
                    aria-describedby="basic-icon-default-email2" wire:model="setting.email" />
                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
            </div>
            <small class="text-danger">
                @error('setting.email')
                    {{ $message }}
                @enderror
            </small>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 form-label" for="basic-icon-default-phone">Phone</label>
        <div class="col-sm-10">
            <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                <input type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                    placeholder="01094223971" aria-label="01094223971" aria-describedby="basic-icon-default-phone2"
                    wire:model="setting.phone" />
            </div>
            <small class="text-danger">
                @error('setting.phone')
                    {{ $message }}
                @enderror
            </small>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 form-label" for="basic-icon-default-facebook">Facebook URL </label>
        <div class="col-sm-10">
            <div class="input-group input-group-merge">
                <span id="basic-icon-default-facebook2" class="input-group-text"><i class='bx bxl-facebook'></i></span>
                <input type="text" id="basic-icon-default-facebook" class="form-control facebook-mask"
                    placeholder="Facebook Url" aria-label="Facebook Url" aria-describedby="basic-icon-default-facebook2"
                    wire:model="setting.facebook" />
            </div>
            <small class="text-danger">
                @error('setting.facebook')
                    {{ $message }}
                @enderror
            </small>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 form-label" for="basic-icon-default-instagram">instagram URL </label>
        <div class="col-sm-10">
            <div class="input-group input-group-merge">
                <span id="basic-icon-default-instagram2" class="input-group-text"><i
                        class='bx bxl-instagram'></i></span>
                <input type="text" id="basic-icon-default-instagram" class="form-control instagram-mask"
                    placeholder="Instagram Url" aria-label="Instagram Url"
                    aria-describedby="basic-icon-default-instagram2" wire:model="setting.instagram" />
            </div>
            <small class="text-danger">
                @error('setting.instagram')
                    {{ $message }}
                @enderror
            </small>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 form-label" for="basic-icon-default-linkedin">Linkedin URL </label>
        <div class="col-sm-10">
            <div class="input-group input-group-merge">
                <span id="basic-icon-default-linkedin2" class="input-group-text"><i
                        class='bx bxl-linkedin'></i></span>
                <input type="text" id="basic-icon-default-linkedin" class="form-control linkedin-mask"
                    placeholder="Linkedin Url" aria-label="Linkedin Url"
                    aria-describedby="basic-icon-default-linkedin2" wire:model="setting.linkedin" />
            </div>
            <small class="text-danger">
                @error('setting.linkedin')
                    {{ $message }}
                @enderror
            </small>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 form-label" for="basic-icon-default-twitter">Twitter URL </label>
        <div class="col-sm-10">
            <div class="input-group input-group-merge">
                <span id="basic-icon-default-twitter2" class="input-group-text"><i class='bx bxl-twitter'></i></span>
                <input type="text" id="basic-icon-default-twitter" class="form-control twitter-mask"
                    placeholder="Twitter Url" aria-label="Twitter Url" aria-describedby="basic-icon-default-twitter2"
                    wire:model="setting.twitter" />
            </div>
            <small class="text-danger">
                @error('setting.twitter')
                    {{ $message }}
                @enderror
            </small>
        </div>
    </div>

    <div class="row justify-content-end">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">
                <span wire:loading.remove>
                    Update
                </span>
                <div class="text-center" wire:loading wire:target='submit'>
                    <span class="spinner-border spinner-border-sm text-light" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </span>
                </div>
            </button>
        </div>
    </div>
</form>

<form wire:submit.prevent="submit">
    @if (session('setting'))
        <div class="alert alert-primary my-success-alert">
            {{ session('setting') }}
        </div>
    @endif
    <x-admin.setting-input  type="text"  label="Name"          name="name"      placeholder="Abdelrahman Khedr"
                            icon="bx bx-user"       error_wire="setting.name"       />

    <x-admin.setting-input  type="text"  label="Address"       name="address"   placeholder="Qaranshow"
                            icon="bx bx-buildings"  error_wire="setting.address"    />

    <x-admin.setting-input  type="email" label="Email"         name="email"     placeholder="AbdelrahmanKhedr@gmail.com"
                            icon="bx bx-envelope"   error_wire="setting.email"      />

    <x-admin.setting-input  type="phone" label="Phone"         name="phone"     placeholder="01094223971"
                            icon="bx bx-phone"      error_wire="setting.phone"      />

    <x-admin.setting-input  type="text"  label="Facebook URL"  name="facebook"  placeholder="Facebook URL"
                            icon="bx bxl-facebook"  error_wire="setting.facebook"   />

    <x-admin.setting-input  type="text"  label="Instagram URL" name="instagram" placeholder="Instagram URL"
                            icon="bx bxl-instagram" error_wire="setting.instagram"  />

    <x-admin.setting-input  type="text"  label="Linkedin URL"  name="linkedin"  placeholder="Linkedin URL"
                            icon="bx bxl-linkedin"  error_wire="setting.linkedin"   />

    <x-admin.setting-input  type="text"  label="Twitter URL"   name="twitter"   placeholder="Twitter URL"
                            icon="bx bxl-twitter"   error_wire="setting.twitter"    />


    <div class="row justify-content-end">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">
                <x-admin.loading  name="Update" />
            </button>
        </div>
    </div>
</form>

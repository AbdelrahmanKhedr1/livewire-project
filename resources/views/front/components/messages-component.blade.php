<div class="wow fadeInUp" data-wow-delay="0.3s">
    @if (session('message'))
        <div class="alert alert-success my-success-alert">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent='submit'>
        <div class="row g-3">
            <x-front.input col='col-md-6' type='text' name='name' label='Your Name' />
            <x-front.input col='col-md-6' type='text' name='email' label='Your Email' />
            <x-front.input col='col-12' type='text' name='subject' label='Subject' />
            <x-front.textarea col='col-12' height='150' name='message' label='Message' />

            <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">
                    <x-admin.loading name="Send Message" />
                </button>
            </div>
        </div>
    </form>
</div>

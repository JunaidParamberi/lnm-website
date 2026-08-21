<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">

    <!-- Heading -->
    <div class="lightnmedia-text gap-bottom-40">
        <h4>Send Us A Message</h4>
        Then let us know about it and we can see what we can do to help
    </div>

    <!-- Form -->
    <div class="lightnmedia-form">
        <div id="cform" class="cform">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-4">
                    <p>
                        <input placeholder="Full Name" type="text" name="name"  wire:model='name'/>
                        @error('name')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-4">
                    <p>
                        <input placeholder="Email Address" type="email" name="email" wire:model='email'/>
                        @error('email')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-4">
                    <p>
                        <input placeholder="Phone Number" type="tel" name="tel" wire:model='phone'/>
                        @error('tel')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-4">
                    <p>
                        <textarea placeholder="Message" name="message" wire:model='message'></textarea>
                        @error('message')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-4">
                    <p>
                        <button wire:click="store" class="lightnmedia-btn lightnmedia-hover-btn mb-2">
                            <span>Send Message</span>
                        </button>
                    </p>
                </div>
            </div>
        </div>
        <div class="alert-success" style="display: none;"><h5>Thanks, your message is sent successfully.</h5></div>
    </div>

    @if (session()->has('message'))


    <div class="bg-green-500 mb-2 text-white px-4 py-3 rounded relative">
        <span>  {{ session('message') }}</span>
        <button type="button" class="absolute top-0 right-0 mt-2 mr-2 text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-full p-1.5">
            <span class="sr-only">Close</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>

        @endif

</div>

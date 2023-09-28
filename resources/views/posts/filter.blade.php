<x-form action="{{ route('posts') }}">

    <div class="row">

        <div class="col-12 col-md-4">

            <div class="mb-3">

                <x-input name="search" value="{{ request('search') }}" placeholder="{{ __('Search something...') }}"/>
                
            </div>

        </div>

        <div class="col-12 col-md-4">

            <div class="mb-3">

                <x-select name="category_id" value="{{ request('category_id') }}" :options="$categories"/>
                
            </div>

        </div>

        <div class="col-12 col-md-4">

            <div class="mb-3">

                <x-button type="submit" class="w-100">{{ __('Submit') }}</x-button>
                
            </div>

        </div>

    </div>

</x-form>
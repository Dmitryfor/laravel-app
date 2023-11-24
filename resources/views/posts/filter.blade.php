<x-form action="{{ route('posts') }}">

    <div class="row">

        <div class="col-12 col-md-4">

            <div class="mb-3">

                <x-input name="search" value="{{ request('search') }}" placeholder="{{ __('Search something...') }}"/>
                
            </div>

        </div>

        <div class="col-12 col-md-4">

            <div class="mb-3">

                <x-input name="start_date" value="{{ request('start_date') }}" placeholder="{{ __('Start Date') }}"/>
                
            </div>

        </div>

        <div class="col-12 col-md-4">

            <div class="mb-3">

                <x-input name="end_date" value="{{ request('end_date') }}" placeholder="{{ __('End Date') }}"/>
                
            </div>

        </div>

        <div class="col-12 col-md-4">

            <div class="mb-3">

                <x-input name="tag" value="{{ request('tag') }}" placeholder="{{ __('Tag') }}"/>
                
            </div>

        </div>

        {{-- <div class="col-12 col-md-4">

            <div class="mb-3">

                <x-select name="category_id" value="{{ request('category_id') }}" :options="$categories"/>
                
            </div>

        </div> --}}

        <div class="col-12 col-md-4">

            <div class="mb-3">

                <x-button type="submit" class="w-100">{{ __('Submit') }}</x-button>
                
            </div>

        </div>

    </div>

</x-form>
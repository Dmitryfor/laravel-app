<div class="border-bottom pb-3 mb-5">

    @isset($back_link)

        <div class="mb-2">{{ $back_link }}</div>
        
    @endisset

    <div class="d-flex justify-content-between">

        <div>

            <h1 class="h2">

                {{ $slot }}

            </h1>

        </div>

        @isset($right)

            <div>

                {{ $right }}

            </div>

            
        @endisset

    </div>

</div>
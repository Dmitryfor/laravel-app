<div class="row">

    <div class="col-12 col-md-4">

        <x-card>

            <x-card-body>

                <div class="mb-3 text-muted small">Donation Count</div>

                <h4 class="m-0">{{ $stats['total_count'] }}</h4>

            </x-card-body>

        </x-card>

    </div>

    <div class="col-12 col-md-4">

        <x-card>

            <x-card-body>

                <div class="mb-3 text-muted small">Donation Amount</div>

                <h4 class="m-0">{{ $stats['total_amount'] }}</h4>

            </x-card-body>

        </x-card>

    </div>

    <div class="col-12 col-md-4">

        <x-card>

            <x-card-body>

                <div class="mb-3 text-muted small">Donation Avarage</div>

                <h4 class="m-0">{{ $stats['avg_amount'] }}</h4>

            </x-card-body>

        </x-card>

    </div>

    <div class="col-12 col-md-4">

        <x-card>

            <x-card-body>

                <div class="mb-3 text-muted small">Min Amount</div>

                <h4 class="m-0">{{ $stats['min_amount'] }}</h4>

            </x-card-body>

        </x-card>

    </div>

    <div class="col-12 col-md-4">

        <x-card>

            <x-card-body>

                <div class="mb-3 text-muted small">Max Amount</div>

                <h4 class="m-0">{{ $stats['max_amount'] }}</h4>

            </x-card-body>

        </x-card>

    </div>

</div>
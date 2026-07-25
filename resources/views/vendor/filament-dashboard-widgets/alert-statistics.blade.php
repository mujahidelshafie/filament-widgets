<x-filament-widgets::widget>

    <x-filament::section>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

            @foreach($alerts as $alert)

                <div class="rounded-xl border p-4">

                    <div class="flex items-center justify-between">

                        <span class="text-sm text-gray-500">
                            {{ $alert['label'] }}
                        </span>

                        @if($alert['icon'])
                            <x-dynamic-component
                                :component="$alert['icon']"
                                class="h-5 w-5"
                            />
                        @endif

                    </div>


                    <div class="mt-2 text-2xl font-bold">
                        {{ $alert['value'] }}
                    </div>

                </div>

            @endforeach

        </div>

    </x-filament::section>

</x-filament-widgets::widget>

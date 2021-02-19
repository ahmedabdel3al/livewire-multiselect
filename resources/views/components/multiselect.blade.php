<div>
    <div x-data="dropdown()" {{$attributes->wire('model')}}>
        <div class="relative" wire:ignore>
            <div class="flex flex-col items-center relative">
                <div class="w-full">
                    <div class="p-1 flex border border-gray-200 bg-white rounded">
                        <div class="flex flex-auto flex-wrap">
                            <template x-for="(option,index) in selected" :key="option[trackBy]">
                                <div
                                    class="flex justify-center items-center m-1 font-medium py-1 px-1 bg-white rounded bg-green-500 border">
                                    <div class="text-xs text-white font-normal leading-none max-w-full flex-initial"
                                         x-text="option[title]"></div>
                                    <div class="flex flex-auto flex-row-reverse">
                                        <div x-on:click.stop="remove(option)">
                                            <svg class="fill-current h-4 w-4 " role="button" viewBox="0 0 20 20">
                                                <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                               c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                               l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                               C14.817,13.62,14.817,14.38,14.348,14.849z"/>
                                            </svg>

                                        </div>
                                    </div>
                                </div>
                            </template>
                            <div x-show="selected.length == 0" class="flex-1">
                                <input placeholder="{{$attributes->get('placeholder') ?: 'Select Option'}}"
                                       class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800">
                            </div>
                        </div>
                        <div class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200">

                            <button type="button"
                                    class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                <x-heroicon-o-chevron-down x-show="show" x-on:click="close"/>
                                <x-heroicon-o-chevron-up x-show="!show" x-on:click="open"/>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full mt-0" x-show.transition.origin.top="show===true" x-on:click.away="close">
                    <div class="absolute shadow top-100 bg-white z-40 w-full left-0 rounded max-h-select">
                        <div class="flex flex-col w-full overflow-y-auto max-h-64">
                            <template x-for="(option,index) in options" :key="option[trackBy]" class="overflow-auto">
                                <div
                                    class="cursor-pointer w-full border-gray-100 rounded"
                                    @click="select(option)">
                                    <div
                                        :class="inSelected(option) ? 'hover:bg-red-400' : 'hover:bg-green-400'"
                                        class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
                                        <div class="w-full items-center flex justify-between">
                                            <div class="mx-2 leading-6" x-text="option[title]"></div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                            <div x-show="!options.length"
                                 class="cursor-pointer w-full border-gray-100 rounded border-b border-solid hover:bg-gray-400">
                                <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
                                    <div class="w-full items-center flex justify-between">
                                        <div class="mx-2 leading-6"> List Is empty</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function dropdown() {
            return {
                options: @json($options) ? @json($options) : [],
                selected: @entangle($attributes->wire('model')),
                trackBy:@json($trackBy),
                title:@json($title),
                show: false,
                open() {
                    this.show = true;
                },
                close() {
                    this.show = false;
                },
                select(option, $dispatch) {
                    this.inSelected(option) ? this.remove(option, $dispatch) : this.selected.push(option);
                },
                inSelected(option) {
                    return this.selected.find(item => item[this.trackBy] == option[this.trackBy])
                }
                ,
                remove(option) {
                    this.options = this.options.map((item) => {
                        item.selected = item[this.trackBy] == option[this.trackBy] ? false : true;
                        return item;
                    })
                    this.selected = this.selected.filter(item => item[this.trackBy] != option[this.trackBy])
                }
            }
        }
    </script>
@endpush


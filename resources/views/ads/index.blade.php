<x-main-layout>
    <!-- Start -->
    <section class="relative lg:py-24 py-16">
        <div class="container relative">
            <div class="grid grid-cols-1 justify-center">
                <div class="relative mb-6">
                    <div class="grid grid-cols-1">
                        <form action="/search" method="get">
                            <div id="StarterContent"
                                 class="p-6 bg-white dark:bg-slate-900 rounded-ss-none rounded-se-none md:rounded-se-xl rounded-xl shadow-md dark:shadow-gray-700">
                                <div class="" id="buy-home" role="tabpanel" aria-labelledby="buy-home-tab">
                                    <div class="registration-form text-dark text-start">
                                        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                            <div>
                                                <label class="form-label font-medium text-slate-900 dark:text-white">
                                                    Qidiruv: <span class="text-red-600">*</span></label>
                                                <div class="filter-search-form relative filter-border mt-2">
                                                    <i data-feather="search" class="uil uil-search icons"></i>
                                                    <input name="search_phrase" type="text" id="search_phrase"
                                                           class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0"
                                                           placeholder="Qidiruv iborasi">
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-properties"
                                                       class="form-label font-medium text-slate-900 dark:text-white">Filiallar
                                                </label>
                                                <div class="filter-search-form relative filter-border mt-2">
                                                    <i data-feather="map" class="uil uil-estate icons"></i>
                                                    <select class="form-control bg-gray-50 dark:bg-slate-800 border-0"
                                                            name="search_branch"
                                                            id="choices-catagory-buy">
                                                        <option value="">Filiallar</option>
                                                        @foreach ($branches as $branch)
                                                            <option
                                                                value="{{ $branch->id }}">{{ $branch->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-min-price"
                                                       class="form-label font-medium text-slate-900 dark:text-white">
                                                    Min Price :
                                                </label>
                                                <div class="filter-search-form relative filter-border mt-2">
                                                    <i data-feather="dollar-sign" class="uil uil-usd-circle icons"></i>
                                                    <input type="number" name="min_price" id="buy-min-price"
                                                           class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0"
                                                           placeholder="Min Price">
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-max-price"
                                                       class="form-label font-medium text-slate-900 dark:text-white">
                                                    Max Price :
                                                </label>
                                                <div class="filter-search-form relative filter-border mt-2">
                                                    <i data-feather="dollar-sign" class="uil uil-usd-circle icons"></i>
                                                    <input type="number" name="max_price" id="buy-max-price"
                                                           class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0"
                                                           placeholder="Max Price">
                                                </div>
                                            </div>

                                            <div class="lg:mt-6">
                                                <input type="submit" id="search-buy" name="search"
                                                       class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded"
                                                       value="Qidirish">
                                            </div>
                                        </div><!--end grid-->
                                    </div><!--end container-->
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--end grid-->
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container relative">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">

                @foreach ($ads as $ad)
                    <div
                        class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                        <div class="relative">
                            <img src="{{asset("/storage/".$ad->images->first()?->name)}}" alt="">

                            <div class="absolute top-4 end-4">
                                <form action="/ads/{{$ad->id}}/bookmark" method="post">
                                    @csrf
                                    <button type="submit"
                                            class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full {{$ad->bookmarked ? 'text-red-600 dark:text-red-600' : 'text-slate-100 dark:text-slate-100'}} focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600">

                                        <i data-feather="bookmark" class="text-[20px]"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="pb-6">
                                <a href="/ads/{{$ad->id}}"
                                   class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">{{$ad->title}}</a>
                            </div>

                            <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center me-4">
                                    <i data-feather="map-pin"
                                       class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                    <span>{{$ad->address}}</span>
                                </li>

                                <li class="flex items-center me-4">
                                    <i data-feather="home" class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                    <span>{{$ad->rooms}}-Rooms</span>
                                </li>

                                <li class="flex items-center">
                                    <i data-feather="code" class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                    <span>{{$ad->gender}}</span>
                                </li>
                            </ul>

                            <ul class="pt-6 flex justify-between items-center list-none">
                                <li class="flex items-center">
                                    <i data-feather="dollar-sign"
                                       class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                    <span class="text-lg font-medium">Price ${{$ad->price}}</span>
                                </li>
                            </ul>
                        </div>
                    </div><!--end property content-->
                @endforeach
            </div><!--en grid-->

        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
</x-main-layout>

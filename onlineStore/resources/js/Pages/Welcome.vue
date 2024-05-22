<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>

    <Head title="Welcome" />
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <img id="background" class="absolute -left-20 top-0 max-w-[877px]"
            src="https://laravel.com/assets/img/welcome/background.svg" />
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">
                        <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-end">
                        <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Dashboard
                        </Link>







                        <template v-else>
                            <Link class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Inicio
                            </Link>

                            <Link :href="route('bmw')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            BMW
                            </Link>

                            <Link :href="route('mercedes')" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Mercedes
                            </Link>

                            <Link :href="route('about')" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Sobre Nosotros
                            </Link>

                            <Link class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Contacto
                            </Link>


                            <Link :href="route('login')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Log in
                            </Link>


                            <Link v-if="canRegister" :href="route('register')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Register
                            </Link>

                        </template>
                    </nav>
                </header>

                <main class="mt-6">
                    <div>
                        {{ $page.props }}


                    </div>
                    <div class="bg-white">
                        <div>
                            <!-- Mobile filter dialog   Off-canvas filters for mobile, show/hide based on off-canvas filters state.    -->
                            <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
                                <!--
        Off-canvas menu backdrop, show/hide based on off-canvas menu state.

        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
                                <div class="fixed inset-0 bg-black bg-opacity-25"></div>

                                <div class="fixed inset-0 z-40 flex">
                                    <!--
          Off-canvas menu, show/hide based on off-canvas menu state.

          Entering: "transition ease-in-out duration-300 transform"
            From: "translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "translate-x-full"
        -->
                                    <div
                                        class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl">
                                        <div class="flex items-center justify-between px-4">
                                            <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                                            <button type="button"
                                                class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400">
                                                <span class="sr-only">Close menu</span>
                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>

                                        <!-- Filters -->
                                        <form class="mt-4 border-t border-gray-200">
                                            <div class="border-t border-gray-200 px-4 py-6">
                                                <h3 class="-mx-2 -my-3 flow-root">
                                                    <!-- Expand/collapse section button -->
                                                    <button type="button"
                                                        class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                                        aria-controls="filter-section-mobile-1" aria-expanded="false">
                                                        <span class="font-medium text-gray-900">Categoria</span>
                                                        <span class="ml-6 flex items-center">
                                                            <!-- Expand icon, show/hide based on section open state. -->
                                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                                            </svg>
                                                            <!-- Collapse icon, show/hide based on section open state. -->
                                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </h3>
                                                <!-- Filter section, show/hide based on section state. -->
                                                <div class="pt-6" id="filter-section-mobile-1">
                                                    <div class="space-y-6">
                                                        <div class="flex items-center">
                                                            <input id="filter-mobile-category-0" name="category[]"
                                                                value="new-arrivals" type="checkbox"
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-mobile-category-0"
                                                                class="ml-3 min-w-0 flex-1 text-gray-500">New
                                                                Arrivals</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-mobile-category-1" name="category[]"
                                                                value="sale" type="checkbox"
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-mobile-category-1"
                                                                class="ml-3 min-w-0 flex-1 text-gray-500">Sale</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-mobile-category-2" name="category[]"
                                                                value="travel" type="checkbox" checked
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-mobile-category-2"
                                                                class="ml-3 min-w-0 flex-1 text-gray-500">Travel</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-mobile-category-3" name="category[]"
                                                                value="organization" type="checkbox"
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-mobile-category-3"
                                                                class="ml-3 min-w-0 flex-1 text-gray-500">Organization</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-mobile-category-4" name="category[]"
                                                                value="accessories" type="checkbox"
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-mobile-category-4"
                                                                class="ml-3 min-w-0 flex-1 text-gray-500">Accessories</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                                <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-24">
                                    <h1 class="text-4xl font-bold tracking-tight text-gray-900">BMW</h1>

                                    <div class="flex items-center">
                                        <div class="relative inline-block text-left">
                                            <div>
                                                <button type="button"
                                                    class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                                                    id="menu-button" aria-expanded="false" aria-haspopup="true">
                                                    Sort
                                                    <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <!--
              Dropdown menu, show/hide based on menu state.

              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
                                            <div class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button"
                                                tabindex="-1">
                                                <div class="py-1" role="none">
                                                    <!--
                  Active: "bg-gray-100", Not Active: ""

                  Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
                -->
                                                    <a href="#" class="text-gray-500 block px-4 py-2 text-sm"
                                                        role="menuitem" tabindex="-1" id="menu-item-3">Price: Low to
                                                        High</a>
                                                    <a href="#" class="text-gray-500 block px-4 py-2 text-sm"
                                                        role="menuitem" tabindex="-1" id="menu-item-4">Price: High to
                                                        Low</a>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button"
                                            class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
                                            <span class="sr-only">View grid</span>
                                            <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <button type="button"
                                            class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
                                            <span class="sr-only">Filters</span>
                                            <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <section aria-labelledby="products-heading" class="pb-24 pt-6">
                                    <h2 id="products-heading" class="sr-only">Products</h2>

                                    <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                                        <!-- Filters -->
                                        <form class="hidden lg:block">
                                            <div class="border-b border-gray-200 py-6">
                                                <h3 class="-my-3 flow-root">
                                                    <!-- Expand/collapse section button -->
                                                    <button type="button"
                                                        class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                                        aria-controls="filter-section-1" aria-expanded="false">
                                                        <span class="font-medium text-gray-900">Category</span>
                                                        <span class="ml-6 flex items-center">
                                                            <!-- Expand icon, show/hide based on section open state. -->
                                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                                            </svg>
                                                            <!-- Collapse icon, show/hide based on section open state. -->
                                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </h3>
                                                <!-- Filter section, show/hide based on section state. -->
                                                <div class="pt-6" id="filter-section-1">
                                                    <div class="space-y-4">
                                                        <div class="flex items-center">
                                                            <input id="filter-category-0" name="category[]"
                                                                value="new-arrivals" type="checkbox"
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-category-0"
                                                                class="ml-3 text-sm text-gray-600">New Arrivals</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-category-1" name="category[]" value="sale"
                                                                type="checkbox"
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-category-1"
                                                                class="ml-3 text-sm text-gray-600">Sale</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-category-2" name="category[]"
                                                                value="travel" type="checkbox" checked
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-category-2"
                                                                class="ml-3 text-sm text-gray-600">Travel</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-category-3" name="category[]"
                                                                value="organization" type="checkbox"
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-category-3"
                                                                class="ml-3 text-sm text-gray-600">Organization</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="filter-category-4" name="category[]"
                                                                value="accessories" type="checkbox"
                                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                            <label for="filter-category-4"
                                                                class="ml-3 text-sm text-gray-600">Accessories</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <!-- Product grid -->
                                        <div class="lg:col-span-3">
                                            <!-- Your content -->
                                            <!-- Prueba vista producto -->
                                            <div class="bg-white">
                                                <div
                                                    class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                                                    <div
                                                        class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                                                        <div class="group relative">
                                                            <div
                                                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                                                    alt="Front of men&#039;s Basic Tee in black."
                                                                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                                            </div>
                                                            <div class="mt-4 flex justify-between">
                                                                <div>
                                                                    <h3 class="text-sm text-gray-700">
                                                                        <a href="#">
                                                                            <span aria-hidden="true"
                                                                                class="absolute inset-0"></span>
                                                                            Basic Tee ppp
                                                                        </a>
                                                                    </h3>
                                                                    <p class="mt-1 text-sm text-gray-500">Black</p>
                                                                </div>
                                                                <p class="text-sm font-medium text-gray-900">$35</p>
                                                            </div>
                                                        </div>

                                                        <!-- More products... -->
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </section>
                            </main>
                        </div>
                    </div>


                </main>

                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                    Laravel v{{ laravelVersion }} (PHP v{{ phpVersion }})
                </footer>
            </div>
        </div>
    </div>
</template>

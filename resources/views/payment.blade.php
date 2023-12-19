<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com">
    </script>
    <title>Payment</title>
</head>

<body>
    <div class="flex flex-col items-center border-b bg-white py-4 sm:flex-row sm:px-10 lg:px-20 xl:px-32">
        <a href="#" class="text-2xl font-bold text-gray-800">Pembayaran</a>
        <div class="mt-4 py-2 text-xs sm:mt-0 sm:ml-auto sm:text-base">
            <div class="relative">
                <ul class="relative flex w-full items-center justify-between space-x-2 sm:space-x-4">
                    <li class="flex items-center space-x-3 text-left sm:space-x-4">
                        <a class="flex h-6 w-6 items-center justify-center rounded-full bg-emerald-200 text-xs font-semibold text-emerald-700"
                            href="#"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg></a>
                        <span class="font-semibold text-gray-900">Shop</span>
                    </li>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                    <li class="flex items-center space-x-3 text-left sm:space-x-4">
                        <a class="flex h-6 w-6 items-center justify-center rounded-full bg-emerald-200 text-xs font-semibold text-emerald-700"
                            href="#"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg></a>
                        <span class="font-semibold text-gray-900">Desain</span>
                    </li>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                    <li class="flex items-center space-x-3 text-left sm:space-x-4">
                        <a class="flex h-6 w-6 items-center justify-center rounded-full bg-gray-600 text-xs font-semibold text-white ring ring-gray-600 ring-offset-2"
                            href="#">3</a>
                        <span class="font-semibold text-gray-500">Payment</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <form action="/checkout" method="POST">
        @csrf
    <div class="grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32">
            <div class="px-4 pt-8">
                <p class="text-xl font-medium">Ringkasan Pemesanan</p>
                <p class="text-gray-400">Periksa Jumlah Pesanan Anda.</p>
                <li class="flex flex-col space-y-3 py-6 text-left sm:flex-row sm:space-x-5 sm:space-y-0">
                    <div class="shrink-0">
                        <img class="h-24 w-24 max-w-full rounded-lg object-cover"
                            src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//83/MTA-4622410/jing-s_vardera_-_mug_-_gelas_kopi_-_gelas_-_putih_full01_fxacdnho.jpg"
                            alt="" />
                    </div>
                    <div class="relative flex flex-1 flex-col justify-between">
                        <div class="sm:col-gap-5 sm:grid sm:grid-cols-2">
                            <div class="pr-8 sm:pr-5">
                                <p class="text-base font-semibold text-gray-900">Desain Gelas</p>
                                <p class="mx-0 mt-1 mb-0 text-sm text-gray-400">Rp. 15.000</p>
                            </div>
                            <div class="mt-4 flex items-end justify-between sm:mt-0 sm:items-start sm:justify-end">
                                <div class="sm:order-1">
                                    <div class="mx-auto flex h-8 items-stretch text-gray-600">
                                        <input type="number" name="qyt"
                                            class="border border-gray-500 rounded w-full text-center text-gray-900 justify-center bg-gray-100  text-xs uppercase "
                                            required min="1" placeholder="QYT" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <div class="border-2 border-gray-400 rounded px-8 py-8 m-[20] text-white ">
                    <p class="py-2 text-xl font-medium text-gray-900">Foto Mentahan</p>
                    <div class="bg-gray-600 rounded-md px-2 py-2">
                        <label class=" block">
                            <span class="sr-only">Choose profile photo</span>
                            <input type="file" name="foto_mentah" class="block w-full text-sm text-gray-100
                            file:me-4 file:py-2 file:px-4
                            file:rounded-lg file:border-0
                            file:text-sm file:font-semibold
                            file:bg-blue-600 file:text-white
                            hover:file:bg-blue-700
                            file:disabled:opacity-50 file:disabled:pointer-events-none
                            dark:file:bg-blue-500
                            dark:hover:file:bg-blue-400
                            " required>
                    </div>
                    </label>

                    <p class="py-2 mt-5 text-xl font-medium text-gray-900">Foto Hasil Desain</p>
                    <div class="bg-gray-600 rounded-md px-2 py-2">
                        <label class=" block">
                            <span class="sr-only">Choose profile photo</span>
                            <input type="file" name="foto_desain" class="block w-full text-sm text-gray-100
                            file:me-4 file:py-2 file:px-4
                            file:rounded-lg file:border-0
                            file:text-sm file:font-semibold
                            file:bg-blue-600 file:text-white
                            hover:file:bg-blue-700
                            file:disabled:opacity-50 file:disabled:pointer-events-none
                            dark:file:bg-blue-500
                            dark:hover:file:bg-blue-400
                            " required>
                    </div>
                    </label>
                </div>
            </div>

            <div class="m-[20] bg-gray-50 px-4 pt-8 lg:mt-0">
                <p class="text-xl font-medium">Detail Pembayaran</p>
                <p class="text-gray-400">Lengkapi Pembayaran Anda.</p>
                <div class="">
                    <p class="mt-8 text-lg font-medium">Metode Pembayaran</p>
                    <div class="relative">
                        <input class="peer hidden" id="radio_1" type="radio" name="radio" checked />
                        <span
                            class="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
                        <label
                            class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4"
                            for="radio_1">
                            <img class="w-7 object-contain"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEr9yDusSDHUh4cS_SFqxqYasfxlOkGb_8TXCqjx37bohuoRZZRxj_udeDemOAdD70Eug&usqp=CAU"
                                alt="" />
                            <div class="ml-6">
                                <span class="mt-2 font-semibold">Dana</span>
                                <!-- <p class="text-slate-500 text-sm leading-6">Delivery: 2-4 Days</p> -->
                            </div>
                        </label>
                    </div>
                    <div class="relative mt-1">
                        <input class="peer hidden" id="radio_2" type="radio" name="radio" checked />
                        <span
                            class="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
                        <label
                            class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4"
                            for="radio_2">
                            <img class="w-7 object-contain"
                                src="https://www.pointstar-consulting.com/wp-content/uploads/2022/02/gopay-integration.png"
                                alt="" />
                            <div class="ml-6">
                                <span class="mt-2 font-semibold">Gopay</span>
                                <!-- <p class="text-slate-500 text-sm leading-6">Delivery: 2-4 Days</p> -->
                            </div>
                        </label>
                    </div>

                    <div class="mt-6 border-t border-b py-2">
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-medium text-gray-900">Harga Media</p>
                            <p class="font-semibold text-gray-900">20.000</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-medium text-gray-900">Desain</p>
                            <p class="font-semibold text-gray-900">15.000</p>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-900">Total</p>
                        <p class="text-2xl font-semibold text-gray-900"></p>
                    </div>
                </div>
                <button type="submit"
                    class="mt-4 mb-8 w-full rounded-md bg-gray-900 px-6 py-3 font-medium text-white">Place
                    Order</button>
        </form>
    </div>
    </div>


    <script>
        const decrementButtons = document.querySelectorAll('.decrement');
        const incrementButtons = document.querySelectorAll('.increment');

        decrementButtons.forEach((button) => {
            button.addEventListener('click', function (event) {
                updateCounter(event.target, -1);
            });
        });

        incrementButtons.forEach((button) => {
            button.addEventListener('click', function (event) {
                updateCounter(event.target, 1);
            });
        });

        function updateCounter(clickedButton, change) {
            const counterElement = clickedButton.parentElement.querySelector('.counter');
            let currentValue = parseInt(counterElement.innerText);
            currentValue += change;
            if (currentValue < 1) {
                currentValue = 1;
            }
            counterElement.innerText = currentValue;
        }

    </script>
</body>

</html>

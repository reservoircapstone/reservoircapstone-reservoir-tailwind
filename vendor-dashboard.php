<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link href="./resources/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-[#edf2f9] font-Poppins m-0 p-0">
    <main class="flex relative">

        <aside id="sidebar" class="hidden md:fixed md:overflow-x-hidden md:h-full md:block md:w-48 lg:w-64 bg-sky-200 md:rounded-sm">
            <div id="icons" class="px-6 pt-8">
                <div class="flex justify-between">
                    <span class="material-symbols-outlined bg-blue-500 text-white p-1 rounded-md">
                        water_drop
                    </span>
                    <span class="material-symbols-outlined text-black cursor-pointer" onclick="closeNav()">
                        arrow_back
                    </span>
                </div>
            </div>
            <div id="searchBar" class="px-6 pt-4">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-2">
                        <span class="material-symbols-outlined text-black" style="font-size: 20px;">
                            search
                        </span>
                    </div>
                    <input type="text" class="w-full rounded pl-8 px-4 py-2.5 text-xs font-light bg-gray-200 text-[#969798] placeholder-[#666666]" placeholder="Search">
                </div>
            </div>
            <div id="line" class="px-6 pt-4">
                <hr class="border-[#353535] px-6 pt-4">
            </div>
            <div id="navItems" class="px-6 pt-4">
                <ul class="flex flex-col space-y-2">
                    <li id="dashboard" class="relative text-[#666666] hover:text-white">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                            <span class="material-symbols-outlined">
                                dashboard
                            </span>
                        </div><a href="#" class="inline-block w-full px-4 py-2 pl-9 pr-4 rounded text-xs hover:bg-blue-400 active">Dashboard</a>
                    </li>
                    <li id="store" class="">
                        <div class="relative text-[#666666] hover:text-white flex justify-between">
                            <div class="flex items-center w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                    <span class="material-symbols-outlined">
                                        store
                                    </span>
                                </div><a href="#" class="inline-block w-full px-4 py-2 pl-9 pr-4 rounded text-xs hover:bg-blue-400">Store</a>
                            </div>
                            <button class="absolute right-0 p-1">
                                <span class="material-symbols-outlined flex items-center" style="font-size: 18px;">
                                    expand_more
                                </span>
                            </button>
                        </div>
                        <div class="pt-2 pl-4">
                            <ul class="flex flex-col pl-2 text-[#666666] border-l border-[#353535]">
                                <li><a href="#" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Store Profile</a></li>
                                <li><a href="#" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Store Operations</a></li>
                                <li><a href="#" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Push Schedule</a></li>
                                <li><a href="#" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Push Orders</a></li>
                                <li><a href="#" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Point of Sale</a></li>
                                <li><a href="#" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Subscription</a></li>
                                <li><a href="#" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Advertise</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="products" class="">
                        <div class="relative text-[#666666] hover:text-white flex justify-between">
                            <div class="flex items-center w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                    <span class="material-symbols-outlined">
                                        inventory_2
                                    </span>
                                </div><a href="#" class="inline-block w-full px-4 py-2 pl-9 pr-4 rounded text-xs hover:bg-blue-400">Products</a>
                            </div>
                            <button class="absolute right-0 p-1">
                                <span class="material-symbols-outlined flex items-center" style="font-size: 18px;">
                                    expand_more
                                </span>
                            </button>
                        </div>
                        <div class="pt-2 pl-4">
                            <ul class="flex flex-col pl-2 text-[#666666] border-l border-[#353535]">
                                <li><a href="#" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Modify Products</a></li>

                            </ul>
                        </div>
                    </li>
                    <li id="finance" class="">
                        <div class="relative text-[#666666] hover:text-white flex justify-between">
                            <div class="flex items-center w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                    <span class="material-symbols-outlined">
                                        payments
                                    </span>
                                </div><a href="#" class="inline-block w-full px-4 py-2 pl-9 pr-4 rounded text-xs hover:bg-blue-400">Finance</a>
                            </div>
                            <button class="absolute right-0 p-1">
                                <span class="material-symbols-outlined flex items-center" style="font-size: 18px;">
                                    expand_more
                                </span>
                            </button>
                        </div>
                        <div class="pt-2 pl-4">
                            <ul class="flex flex-col pl-2 text-[#666666] border-l border-[#353535]">
                                <li><a href="#" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Internal Wallet</a></li>
                                <li><a href="#" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Linked Accounts</a></li>
                                <li><a href="#" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Transaction History</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="chat" class="relative text-[#666666] hover:text-white">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                            <span class="material-symbols-outlined">
                                chat
                            </span>
                        </div><a href="#" class="inline-block w-full px-4 py-2 pl-9 pr-4 rounded text-xs hover:bg-blue-400">Chat</a>
                    </li>
                    <li id="insights" class="">
                        <div class="relative text-[#666666] hover:text-white flex justify-between">
                            <div class="flex items-center w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                    <span class="material-symbols-outlined">
                                        insights
                                    </span>
                                </div><a href="#" class="inline-block w-full px-4 py-2 pl-9 pr-4 rounded text-xs hover:bg-blue-400">Insights</a>
                            </div>
                            <button class="absolute right-0 p-1">
                                <span class="material-symbols-outlined flex items-center" style="font-size: 18px;">
                                    expand_more
                                </span>
                            </button>
                        </div>
                        <div class="pt-2 pl-4">
                            <ul class="flex flex-col pl-2 text-[#666666] border-l border-[#353535]">
                                <li><a href="#" class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-blue-400 hover:text-white">Dashboard</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="hr" class="px-6 pt-4 mb-2 pb-5">
                <hr class="border-[#353535]" />
            </div>
        </aside>

    </main>


    <!-- Scripts -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="node_modules/countup.js/dist/countUp.min.js"></script>
</body>

</html>
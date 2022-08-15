<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link href="./resources/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="node_modules/countup.js/dist/countUp.min.js"></script>
</head>

<body class="m-0 p-0">

    <header class="justify-between relative flex ml-0 items-center py-[10px] px-10px lg:py-0 lg:px-[10%]">
        <ul class="menuContent opacity-100 bg-[#edf2f9] w-full left-0 py-4 z-10 absolute -top-[210px]">
            <li class="mx-4">
                <a class="dashboard block py-2 px-4 text-gray-500 text-sm font-100 hover:font-semibold active" href="">Dashboard</a>
            </li>
            <li class="mx-4">
                <a class="block py-2 px-4 text-gray-500 text-sm font-100 hover:font-semibold" href="">Products</a>
            </li>
            <li class="mx-4">
                <a class="block py-2 px-4 text-gray-500 text-sm font-100 hover:font-semibold" href="">Operations</a>
            </li>
            <li class="mx-4">
                <a class="block py-2 px-4 text-gray-500 text-sm font-100 hover:font-semibold" href="">Push Schedule</a>
            </li>
            <li class="mx-4">
                <a class="block py-2 px-4 text-gray-500 text-sm font-100 hover:font-semibold" href="">Push Order</a>
            </li>
        </ul>
        <span class="menu absolute left-0 text-3xl lg:hidden">
            <ion-icon name="menu-outline" onclick="Menu(this)"></ion-icon>
        </span>
        <div class="items-center flex ml-7 p-0">
            <img class="h-20 w-20" src="./resources/img/reservoir.png" alt="logo">
            <span class="text-xl font-semibold">Reservoir</span>
        </div>
        <ul class="flex ml-122xl:ml-16">
            <li class="font-Poppins font-[500] text-[16px] text-[#edf0f1] no-underline mr-3">
                <a class="font-Poppins font-[500] text-[16px] text-[#edf0f1] no-underline" href="">
                    <span class="material-symbols-outlined text-gray-600">
                        shopping_cart
                    </span>
                </a>
            </li>
            <li class="font-Poppins font-[500] text-[16px] text-[#edf0f1] no-underline mr-3">
                <a class="font-Poppins font-[500] text-[16px] text-[#edf0f1] no-underline" href="">
                    <span class="material-symbols-outlined text-gray-600">
                        notifications
                    </span>
                </a>
            </li>
            <div class="relative">
                <li class="profile font-Poppins font-[500] text-[16px] text-[#edf0f1] no-underline relative">
                    <img class="w-8 h-8 rounded-full cursor-pointer" src="./resources/img/3.jpg" alt="profile">
                    </a>
                </li>
                <div class="hidden dropdown right-0 absolute top-1 lg:origin-top-right mt-10 w-36 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-10" id="profileDropdown">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:text-blue-500" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:text-blue-500" role="menuitem" tabindex="-1" id="menu-item-1">Owner Profile</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:text-blue-500" role="menuitem" tabindex="-1" id="menu-item-2">Store</a>
                        <form method="POST" action="#" role="none">
                            <button type="submit" class="text-gray-700 block w-full text-left px-4 py-2 text-sm hover:text-blue-500" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                        </form>
                    </div>
                </div>
            </div>
        </ul>
    </header>


    <!--
    05. The avatar
      # This is a element is positioned dynamically
      # To correctly position this element, we will need to know 
        when and why it changes the position and 
        what element it really follows
      # the 4 possible elements where the avatar is contained are #cover, #details, #left, and #right
      # observation 1
          avatar - on the left side
          screen - wide
          #cover - screen's full width
          #details - screen's full width
          #left - half / less than the screen's full width, equal to or larger than #right
          #right - half / less than the screen's full width, equal to or smaller than #left
      # observation 2
          avatar - on the center (changed)
          screen - small (changed)
          #cover - screen's full width (no changes)
          #details - screen's full width (no changes)
          #left - screen's full width (changed)
          #right - screen's full width (changed)
      # conclusion
          we can now eliminate most of the possible elements where the avatar is contained
          by first eliminating the elements that didn't change
          We can safely eliminate #cover and #details among them
          We can also eliminate #right since the avatar is inclined to go left of #left on wide screens
          
          NOTE that we can still use #cover, #details, and #right to achieve this
            But it just makes more sense to use #left since it will also contain
            the User's name, User's Company, User's Location
            Now we can add avatar and treat them as one element, so we can move them together anywhere

      a. let's create a div for the avatar inside #left
        - give it and id of avatar
        - a height and width of 32
        - a background green 100
        - a rounded-full border
      
      b. add position relative to #left
      c. Let's position the avatar on the center first
        - add position absolute to #avatar
        - add margin auto
        - add inset-x-0 (shorthand for left-0 and right-0)
        - add -top-16, this is half of the avatars height, and will position it 16 pixels above from the top of #left
      d. Let's position it to the left on wider screens
        - add sm:right-auto, since we already set left-0 via inset-x-0 (left-0, right-0), we just need to remove right-0 or bring it back to auto on larger screens
  -->
    <div id="banner" class="flex flex-col h-96 bg-gray-100">
        <div id="cover" class="flex-1 bg-blue-100"></div>
        <div id="details" class="flex flex-col flex-1 bg-red-100 sm:flex-row">
            <div id="left" class="relative bg-orange-100 sm:w-96 grow">
                <div id="avatar" class="absolute inset-x-0 -top-16 m-auto w-32 h-32 bg-green-100 rounded-full sm:right-auto"></div>
                left
            </div>
            <div id="right" class="bg-yellow-100 sm:w-96">right</div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-background font-inter h-dvh w-dvw">
    <div class="w-[1200px] h-[1200px] bg-secondary absolute top-[-280px] left-[-274px] rounded-[50%] z-[-1]"></div>
    <div class="w-[50px] text-secondary fixed right-[50px] top-[50px]">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
            <path d="M16 128h416c8.8 0 16-7.2 16-16V48c0-8.8-7.2-16-16-16H16C7.2 32 0 39.2 0 48v64c0 8.8 7.2 16 16 16zm480 80H80c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16h416c8.8 0 16-7.2 16-16v-64c0-8.8-7.2-16-16-16zm-64 176H16c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16h416c8.8 0 16-7.2 16-16v-64c0-8.8-7.2-16-16-16z" />
        </svg>
    </div>
    <aside>

    </aside>
    <main>
        <div class="relative">
            <div class="text-[200px] font-semibold text-white absolute top-[50px] left-[80px]">to-do *</div>
            <div class="text-[35px] font-extralight absolute top-[320px] left-[100px] w-[750px] text-white">[/təˈdo͞o/] noun</div>
            <div class="text-[26px] italic absolute top-[450px] left-[100px] w-[750px] text-white">A list of tasks or responsibilities you need to complete.</div>
        </div>
        <div class="relative">
            <button class="rounded-2xl w-[300px] h-[70px] border-secondary border-2 absolute right-[50px] top-[430px] text-2xl bg-transparent text-secondary hover:bg-secondary hover:text-white duration-100 ease-in not-italic hover:italic" type="button">I'll do it</button>
            <div class="bg-white rounded-4xl min-h-[370px] max-h-[450px] absolute right-[50px] left-[50px] top-[530px] px-7 py-5">
                <textarea class="w-full h-full text-background text-2xl focus:outline-none placeholder:italic resize-none" id="description" name="description" placeholder="What's your plan ?"></textarea>
            </div>
        </div>
    </main>
</body>

</html>
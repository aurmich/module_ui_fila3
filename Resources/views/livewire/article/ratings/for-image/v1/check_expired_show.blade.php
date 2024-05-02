<div class="flex flex-col gap-4" {{-- x-show="!isloggedIn" --}}>
    <div class="block w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full flex py-3 px-3 justify-between bg-blue-1 text-white font-bold" style="color:white">
            Your bet
        </div>
        <div class="flex flex-col items-center justify-center w-11/12 gap-3 mx-auto my-4 border rounded-t">
            <div class="flex flex-col gap-4" {{-- x-show="!isloggedIn" --}}>
                <div class="block w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    {{ __('blog::article.expired') }}
                </div>
            </div>
        </div>

    </div>
</div>



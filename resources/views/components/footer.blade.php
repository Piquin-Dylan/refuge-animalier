<footer class="bg-regal-orange px-[20px] py-[20px]">
    <div class="flex flex-col gap-5">
        <img src="{{asset('Branding.svg')}}">
        <span class="text-white">{{__('footer.Content')}}</span>
        <nav>
            <h2 class="hidden"></h2>
            <ul class="text-white flex gap-2 flex-col">
                <li class="font-black">{{__('heading.Contact')}}</li>
                <li>{{__('footer.Adress')}}</li>
                <li>{{__('footer.PhoneNumber')}}</li>
                <li>{{__('footer.MailAdress')}}</li>

                <ul class="text-white flex gap-2 flex-col">
                    <li class="font-black">{{__('footer.Navigation')}}</li>
                    <li><a href="">{{__('heading.Home')}}</a></li>
                    <li>{{__('heading.About')}}</li>
                    <li>{{__('heading.Contact')}}</li>
                    <li>{{__('heading.Adoption')}}</li>
                </ul>
            </ul>

        </nav>
    </div>
</footer>

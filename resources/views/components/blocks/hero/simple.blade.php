<div class="{{ $data['background_color'] ?? 'bg-white' }}">
    <div class="relative isolate px-6 pt-14 lg:px-8">
      <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        @if(isset($data['announcement']) && $data['announcement'])
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div class="relative rounded-full px-3 py-1 text-sm leading-6 {{ $data['announcement_text_color'] ?? 'text-gray-600' }} ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    {{ $data['announcement'] }}
                    @if(isset($data['announcement_link']) && $data['announcement_link'])
                        <a href="{{ $data['announcement_link'] }}" class="font-semibold {{ $data['announcement_link_color'] ?? 'text-indigo-600' }}">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            {{ $data['announcement_link_text'] ?? 'Read more' }}
                            <span aria-hidden="true">&rarr;</span>
                        </a>
                    @endif
                </div>
            </div>
        @endif
        <div class="text-center">
          <h1 class="text-4xl font-bold tracking-tight {{ $data['text_color'] ?? 'text-gray-900' }} sm:text-6xl">
            {{ $data['title'] ?? 'Data to enrich your online business' }}
          </h1>
          <p class="mt-6 text-lg leading-8 {{ $data['description_color'] ?? 'text-gray-600' }}">
            {{ $data['description'] ?? 'Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.' }}
          </p>
          @if(isset($data['cta_text']) && $data['cta_text'])
            <div class="mt-10 flex items-center justify-center gap-x-6">
              <a href="{{ $data['cta_link'] ?? '#' }}" class="rounded-md {{ $data['cta_color'] ?? 'bg-indigo-600 hover:bg-indigo-500' }} px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                {{ $data['cta_text'] }}
              </a>
              @if(isset($data['secondary_cta_text']) && $data['secondary_cta_text'])
                <a href="{{ $data['secondary_cta_link'] ?? '#' }}" class="text-sm font-semibold leading-6 {{ $data['secondary_cta_color'] ?? 'text-gray-900' }}">
                  {{ $data['secondary_cta_text'] }}
                  <span aria-hidden="true">→</span>
                </a>
              @endif
            </div>
          @endif
        </div>
      </div>
      <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
    </div>
  </div>

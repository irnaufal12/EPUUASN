@extends('layouts.master')
@section('Content')   
        <div class="container px-6 mx-auto grid">
            <div class="flex items-center justify-between" >
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              Forms
            </h2>

            <a href="{{url()->previous()}}">
                <button
                class="px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Go Back
                </button>
              </a>
          </div>
            
            <!-- CTA -->
            {{-- <a
              class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
              href="https://github.com/estevanmaito/windmill-dashboard">
              <div class="flex items-center">
                <svg
                  class="w-5 h-5 mr-2"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  ></path>
                </svg>
                <span>Star this project on GitHub</span>
              </div>
              <span>View more &RightArrow;</span>
            </a> --}}

            <!-- General elements -->
            {{-- JUDUL FORM --}}
            <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
              Create Table Bank Soal
            </h4>

            <form action="{{route('bank_soal.store')}}" method="POST">
              @csrf
              <div
                class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                
                <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Tentang
                </span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  multiple name="tentang">
                  @foreach ($table as $data)
                  <option>{{$data->tentang}}</option>
                  @endforeach
                </select>
              </label>

                <label class="block text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Soal</span>
                  <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    value="{{old('soal')}}" name="soal"/>
                </label>

                <label class="block text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Pilihan A</span>
                  <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    value="{{old('pil_A')}}" name="pil_A"/>
                </label>
                <label class="block text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Pilihan B</span>
                  <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    value="{{old('pil_B')}}" name="pil_B"/>
                </label>
                <label class="block text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Pilihan C</span>
                  <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    value="{{old('pil_C')}}" name="pil_C"/>
                </label>
                <label class="block text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Pilihan D</span>
                  <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    value="{{old('pil_D')}}" name="pil_D"/>
                </label>
                <label class="block text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Pilihan E</span>
                  <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    value="{{old('pil_E')}}" name="pil_E"/>
                </label>

                <label class="block text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Kunci</span>
                  <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    value="{{old('kunci')}}" name="kunci"/>
                </label>

              </div>
            
              <button class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Submit
              </button>
            </form>
          </div>
@endsection
<style>
    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .animated.faster {
        -webkit-animation-duration: 500ms;
        animation-duration: 500ms;
    }

    .fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
    }

    .fadeOut {
        -webkit-animation-name: fadeOut;
        animation-name: fadeOut;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }
</style>

<div >
    <button onclick="openModalthree()" class='bg-purple-500 text-white ml-12 p-2 rounded text-sm font-semibold'>Method +</button>
</div>

<div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
    style="background: rgba(0,0,0,.7);">
    <div
        class="border border-teal-500 modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Header</p>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </div>
            </div>
            <!--Body-->
            <form action="{{route('department.store')}}" method="POST">
                @csrf
                <div class="my-5">
                    <label for="name" class="block text-sm font-medium text-gray-700">Department Name</label>
                    <input type="text" name="name" id="email" value="{{old('email')}}" class="mt-1 pl-2 outline-none focus:border-indigo-500 py-2 block border w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <!--Footer-->
                <div class="flex justify-end pt-2">
                    <button type="submit"
                        class="focus:outline-none px-4 bg-teal-500 p-3 ml-3 rounded-lg text-white bg-purple-500 hover:bg-teal-400">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    const modalthree = document.querySelector('.main-modalthree');
    const closeButton = document.querySelectorAll('.modal-close');

    const modalClose = () => {
        modalthree.classList.remove('fadeIn');
        modalthree.classList.add('fadeOut');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 500);
    }

    const openModalthree = () => {
        modalthree.classList.remove('fadeOut');
        modalthree.classList.add('fadeIn');
        modalthree.style.display = 'flex';
    }

    for (let i = 0; i < closeButton.length; i++) {

        const elements = closeButton[i];

        elements.onclick = (e) => modalClose();

        modalthree.style.display = 'none';

        window.onclick = function (event) {
            if (event.target == modalthree) modalClose();
        }
    }
</script>

<nav x-bind:style="!navScrolled && { 'box-shadow': '0px 0px 10px 0px #ddd' }" class="bg-white z-40 fixed w-full top-0"> <!-- :class="{'bg-red-200' : !navScrolled }" -->
    <div class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-20">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="/">
                        <!-- <img class="h-8 w-auto" src="../img/logo_no_bg.png" alt="Nuno's Personal Logo"> -->
                        <img class="h-12 w-auto" src="../img/logo1.png" alt="Nuno's Personal Logo">
                    </a>
                </div>
                <div class="ml-10 hidden sm:inline-block">
                    <ul class="space-x-8">
                        <li class="inline-block font-semibold text-gray-300 transition duration-300 hover:text.gray-600 @if(Request::is('/')){{ 'text-gray-900' }}@endif"><a href="/">Home</a></li>
                        <li class="inline-block font-semibold text-gray-300 transition duration-300 hover:text-gray-600 @if(Request::is('portfolio')){{ 'text-gray-900' }}@endif"><a href="/portfolio">Portfolio</a></li>
                        <li class="inline-block font-semibold text-gray-300 transition duration-300 hover:text-gray-600 @if(Request::is('services')){{ 'text-gray-900' }}@endif"><a href="/services">Services</a></li>
                        <li class="inline-block font-semibold text-gray-300 transition duration-300 hover:text-gray-600 @if(Request::is('about')){{ 'text-gray-900' }}@endif"><a href="/about">About</a></li>
                        <li class="inline-block font-semibold text-gray-300 transition duration-300 hover:text-gray-600 @if(Request::is('contact')){{ 'text-gray-900' }}@endif"><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div>
                <div class="hidden sm:flex items-center" x-data="{ languageMenu: false }">
                    <!-- <div @click="languageMenu=true" class="inline-block flex items-center relative cursor-pointer">
                        <div class="inline-block mr-4 text-gray-700">
                            <svg class="h-6 w-6" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 29">
                                <path d="M14.5072 0C6.50955 0 0.00720215 6.50234 0.00720215 14.5C0.00720215 22.4977 6.50955 29 14.5072 29C22.5049 29 29.0072 22.4977 29.0072 14.5C29.0072 6.50234 22.5049 0 14.5072 0ZM26.6226 9.05684C25.8183 10.0141 24.9008 10.858 24.5213 10.9713C24.0228 10.5068 22.8277 9.63457 22.0574 10.1217C21.7515 10.3143 21.457 10.7447 21.7912 11.6793C22.2217 12.8914 23.2922 13.9902 23.9209 14.5623C23.3205 15.2873 22.3576 16.6014 22.3576 17.5189C22.3576 17.6775 22.3293 17.7172 22.0687 17.9437C21.7006 18.2609 21.1511 18.7424 21.1511 19.9375C21.1511 20.7078 19.8371 21.3592 18.9478 21.6594C18.608 21.2176 18.1322 20.4756 18.1322 19.9375C18.1322 19.592 18.1945 19.5127 18.3191 19.3541C18.54 19.0709 18.7383 18.7594 18.7383 18.125C18.7383 17.5189 18.557 17.0998 18.3984 16.7316C18.2511 16.3975 18.1379 16.1312 18.1379 15.7064C18.1379 14.1318 15.1076 13.8939 13.3064 13.8939C12.8193 13.8939 12.1 13.7014 12.1 13.2879C12.1 13.101 12.083 12.8971 12.066 12.6762C12.0037 11.9568 11.9414 11.2828 12.5304 10.6938C13.4594 9.76484 15.0793 9.66289 15.7306 9.66289C16.382 9.66289 16.5972 9.76484 16.8691 9.89512C17.3166 10.1104 17.7414 10.2689 18.7552 10.2689L19.4519 10.2746C20.7433 10.2916 21.8592 10.3143 22.5162 9.66855C22.8277 9.3627 22.9863 8.95488 22.9863 8.45645C22.9863 6.27578 19.1857 6.03789 17.5488 6.03789C16.4103 6.03789 15.6174 6.41738 14.915 6.75156C14.4789 6.96113 14.0937 7.14238 13.6746 7.21602C13.6746 7.19902 13.6746 7.18203 13.6802 7.15938C13.7652 6.62129 14.5582 5.8 15.4078 5.36953C16.0082 5.06367 16.7105 4.62187 16.8011 3.91953C16.8351 3.63633 16.7615 3.38711 16.6539 3.17754C17.4525 2.87734 18.9705 2.63379 20.3015 2.54316C23.0826 3.90254 25.3369 6.21348 26.6226 9.05684ZM4.83865 21.1439V23.5908C2.61267 21.2289 1.2363 18.057 1.21931 14.5623C2.25583 14.7719 2.67498 15.5082 3.10544 16.2955C3.32068 16.6863 3.52458 17.0602 3.81345 17.3434C4.32888 17.8588 5.0199 17.9381 5.52966 17.9947C5.71658 18.0174 6.00544 18.0457 6.05642 18.125C6.05642 18.4365 5.89783 18.6801 5.62029 19.0822C5.26912 19.575 4.83865 20.1924 4.83865 21.1439ZM14.5072 27.7936C11.2957 27.7936 8.35037 26.6494 6.05076 24.7463V21.1496C6.05076 20.5775 6.30564 20.2037 6.60583 19.7789C6.91169 19.3371 7.2572 18.8387 7.2572 18.1307C7.2572 16.9809 6.21501 16.8619 5.65994 16.7996C5.25779 16.7543 4.88396 16.7146 4.66306 16.4938C4.4988 16.3295 4.33455 16.0293 4.15896 15.7178C3.68884 14.8568 2.99216 13.6107 1.27029 13.3502C1.85935 6.55898 7.56873 1.20645 14.5072 1.20645C15.6513 1.20645 16.7502 1.36504 17.8093 1.63691C16.7842 1.82949 15.7533 2.12402 15.2888 2.58848C15.1699 2.70742 15.1076 2.86602 15.1133 3.03594C15.1189 3.2002 15.1926 3.35879 15.3172 3.47207C15.5324 3.66465 15.5777 3.76094 15.5834 3.76094C15.572 3.78926 15.4588 3.98184 14.8414 4.29336C13.8219 4.80879 12.6437 5.86797 12.4681 6.97246C12.3888 7.4709 12.5304 7.93535 12.876 8.28086C12.9892 8.39414 13.1422 8.45645 13.3008 8.45645C14.139 8.45645 14.7904 8.14492 15.4135 7.84473C16.0592 7.53887 16.6652 7.24434 17.5261 7.24434C19.8994 7.24434 21.7572 7.77676 21.7572 8.45078C21.7572 8.7 21.6779 8.77363 21.6496 8.80195C21.3551 9.09648 20.3412 9.07383 19.4519 9.0625C19.214 9.05684 18.9761 9.05684 18.7326 9.05684C17.9113 9.05684 17.6564 8.93789 17.3619 8.79629C17.0164 8.63203 16.6312 8.45078 15.708 8.45078C14.7111 8.45078 12.859 8.63203 11.6582 9.83848C10.6726 10.824 10.7746 12.0021 10.8426 12.7838C10.8595 12.965 10.8765 13.135 10.8765 13.2879C10.8765 14.4773 12.0943 15.1004 13.2951 15.1004C15.1416 15.1004 16.7388 15.4459 16.9201 15.7064C16.9201 16.3805 17.124 16.8449 17.2826 17.2131C17.4185 17.5246 17.5261 17.7682 17.5261 18.1193C17.5261 18.3912 17.4808 18.4535 17.3619 18.6064C17.1297 18.9066 16.9258 19.2352 16.9258 19.9318C16.9258 21.2006 18.1492 22.5996 18.2908 22.7525C18.4097 22.8828 18.5683 22.9508 18.7383 22.9508C18.7892 22.9508 18.8402 22.9451 18.8855 22.9338C19.2424 22.8432 22.3633 21.9822 22.3633 19.9318C22.3633 19.2861 22.5615 19.1162 22.8674 18.85C23.1676 18.5895 23.5697 18.2383 23.5697 17.5133C23.5697 17.0262 24.4306 15.7801 25.2236 14.8965C25.3369 14.7719 25.3935 14.6076 25.3765 14.4377C25.3595 14.2678 25.2802 14.1148 25.1443 14.0129C24.6742 13.6504 23.3771 12.4609 22.941 11.3111C23.1845 11.4414 23.4961 11.651 23.7396 11.8945C23.9435 12.0984 24.2097 12.1947 24.5156 12.1834C25.3142 12.1381 26.3621 11.1525 27.1097 10.3199C27.5459 11.634 27.7894 13.033 27.7894 14.4887C27.8008 21.8293 21.8365 27.7936 14.5072 27.7936Z"></path>
                            </svg>
                        </div>
                    </div> -->
                    <!-- <div x-show="languageMenu" @click.away="languageMenu=false" class="block w-56 rounded bg-white absolute right-12 top-14 shadow-lg border-t-2 border-gray-100">
                        <a href="" class="w-full border-b border-gray-100 px-5 py-4 text-gray-800 hover:bg-gray-100 block flex items-center justify-between">
                            <span>Português</span>
                            <div class="w-4 h-4 rounded-full border border-gray-700 bg-gray-700 relative"></div>
                        </a>
                        <a href="" class="w-full border-b border-gray-100 px-5 py-4 text-gray-800 hover:bg-gray-100 block flex items-center justify-between">
                            <span>English</span>
                            <div class="w-4 h-4 rounded-full border border-gray-200"></div>
                        </a>
                    </div> -->
                    <div class="inline-block">
                        <a href="/contact" class="inline-block">
                            <div class="h-10 w-10 bg-gray-900 hover:bg-blue-400 transition duration-300 text-white flex items-center justify-center">
                                <svg class="h-5 w-5" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M467,76H45C20.137,76,0,96.262,0,121v270c0,24.885,20.285,45,45,45h422c24.655,0,45-20.03,45-45V121    C512,96.306,491.943,76,467,76z M460.698,106c-9.194,9.145-167.415,166.533-172.878,171.967c-8.5,8.5-19.8,13.18-31.82,13.18    s-23.32-4.681-31.848-13.208C220.478,274.284,64.003,118.634,51.302,106H460.698z M30,384.894V127.125L159.638,256.08L30,384.894z     M51.321,406l129.587-128.763l22.059,21.943c14.166,14.166,33,21.967,53.033,21.967c20.033,0,38.867-7.801,53.005-21.939    l22.087-21.971L460.679,406H51.321z M482,384.894L352.362,256.08L482,127.125V384.894z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button @click="mobileMenu=true" type="button" class="inline-flex items-center justify-center rounded-md text-gray-800 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>

                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
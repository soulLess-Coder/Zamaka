@extends('layouts.owner')

@section('content')
<x-owner-sidebar>
    <div class="card w-96 bg-base-100 shadow-xl">
    <div class="card-body">
        <h2 class="card-title">Card title!</h2>
        <p>If a dog chews shoes whose shoes does he choose?</p>
        <div class="justify-end card-actions">
        <button class="btn btn-primary">Buy Now</button>
        </div>
    </div>
</div>
    <div class="card w-96 bg-base-100 shadow-xl flex align-items-center justify-content-between">
        <div class="card-data me-2"><h5>Propeties for Sale</h5><h2 class="fs-40 font-w600">684</h2></div>
        <div class="donught-chart" style="margin-top: -10px;">
            <canvas height="90" width="90" style="display: block;"></canvas>
        </div>
    </div>
    <div class="bg-white shadow xl:w-3/4 2xl:w-4/5 w-full px-6 sm:px-12 py-5 sm:py-10">
        <div class="mb-5 sm:mb-10 rounded-tl-lg rounded-tr-lg">
            <div class="sm:flex items-center justify-between">
                <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Invoices</p>
                <div class="flex items-center mt-4 sm:mt-0">
                    <div aria-label="search bar" tabindex="0" class="focus:outline-none focus:ring-2 focus:ring-gray-600 flex items-center pl-3 bg-white border rounded-md border-gray-200">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/table_2-svg1.svg" alt="search">
                        <input type="text" class=" py-2.5 pl-1 w-40 sm:w-64 focus:outline-none text-sm rounded-md text-gray-600 placeholder-gray-400" placeholder="Search" />
                    </div>
                    <button onclick="popuphandler(true)" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 inline-flex ml-3 whitespace-nowrap items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                        <p class="text-xs sm:text-sm font-medium leading-none text-white">New Invoice</p>
                    </button>
                </div>
            </div>
        </div>                       
        <div class="">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <thead>
                        <tr class="h-20 w-full text-sm leading-none text-gray-600">
                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-4">Date</th>
                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-10">Invoice #</th>
                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-10">Customer</th>
                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-10">Amount</th>
                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-10">Status</th>
                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-10">Category</th>
                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-10 w-32">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="w-full">
                        <tr class="h-20 text-sm leading-none text-gray-700 border-b border-t border-gray-200 bg-white hover:bg-gray-100">
                            <td tabindex="0" class="focus:outline-none pl-4">06/02/2020</td>
                            <td tabindex="0" class="focus:outline-none pl-10">IDO-2985-2</td>
                            <td class="pl-10">
                                <div class="flex items-center">
                                    <img tabindex="0" alt="girl avatar" class="focus:outline-none shadow-md rounded-full w-10 h-10 mr-3" src="https://cdn.tuk.dev/assets/templates/olympus/invoice.png" />
                                    <span tabindex="0" class="focus:outline-none">Miracle Botos</span>
                                </div>
                            </td>
                            <td tabindex="0" class="focus:outline-none pl-10">$2100.00</td>
                            <td class="pl-10">
                                <div class="w-20 h-6 flex items-center justify-center bg-blue-100 rounded-full">
                                    <p tabindex="0" class="focus:outline-none text-xs leading-3 text-blue-700">Approved</p>
                                </div>
                            </td>
                            <td tabindex="0" class="focus:outline-none pl-10">Business</td>
                            <td class="pl-10">
                                <div class="flex items-center">
                                    <button class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 focus:outline-none bg-gray-100 mr-5 hover:bg-gray-200 py-2.5 px-5 rounded text-sm leading-3 text-gray-600">View</button>
                                    <button class="w-5 focus:ring-2 rounded-md focus:outline-none" role="button" aria-label="options">
                                        <img class="w-5" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/table_2-svg2.svg" alt="dropdown">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="h-20 text-sm leading-none text-gray-700 border-b border-gray-200 bg-white hover:bg-gray-100">
                            <td tabindex="0" class="focus:outline-none pl-4">06/02/2020</td>
                            <td tabindex="0" class="focus:outline-none pl-10">IDO-2985-2</td>
                            <td class="pl-10">
                                <div class="flex items-center">
                                    <img tabindex="0" alt="boy avatar" class="focus:outline-none shadow-md rounded-full w-10 h-10 mr-3" src="https://cdn.tuk.dev/assets/templates/olympus/invoice(1).png" />
                                    <span tabindex="0" class="focus:outline-none">Tiana Levin</span>
                                </div>
                            </td>
                            <td tabindex="0" class="focus:outline-none pl-10">$2100.00</td>
                            <td class="pl-10">
                                <div class="w-20 h-6 flex items-center justify-center bg-blue-100 rounded-full">
                                    <p tabindex="0" class="focus:outline-none text-xs leading-3 text-blue-700">Approved</p>
                                </div>
                            </td>
                            <td tabindex="0" class="focus:outline-none pl-10">Business</td>
                            <td class="pl-10">
                                <div class="flex items-center">
                                    <button class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 focus:outline-none bg-gray-100 mr-5 hover:bg-gray-200 py-2.5 px-5 rounded text-sm leading-3 text-gray-600">View</button>
                                    <button class="focus:ring-2 rounded-md focus:outline-none" role="button" aria-label="options">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/table_2-svg2.svg" alt="dropdown">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="h-20 text-sm leading-none text-gray-700 border-b border-gray-200 bg-white hover:bg-gray-100">
                            <td tabindex="0" class="focus:outline-none pl-4">06/02/2020</td>
                            <td tabindex="0" class="focus:outline-none pl-10">IDO-2985-2</td>
                            <td class="pl-10">
                                <div class="flex items-center">
                                    <img tabindex="0" alt="man avatar" class="focus:outline-none shadow-md rounded-full w-10 h-10 mr-3" src="https://cdn.tuk.dev/assets/templates/olympus/invoice(2).png" />
                                    <span tabindex="0" class="focus:outline-none">Jordyn Korsgaard</span>
                                </div>
                            </td>
                            <td tabindex="0" class="focus:outline-none pl-10">$2100.00</td>
                            <td class="pl-10">
                                <div class="w-20 h-6 flex items-center justify-center bg-blue-100 rounded-full">
                                    <p tabindex="0" class="focus:outline-none text-xs leading-3 text-blue-700">Approved</p>
                                </div>
                            </td>
                            <td tabindex="0" class="focus:outline-none pl-10">Business</td>
                            <td class="pl-10">
                                <div class="flex items-center">
                                    <button class="focus:ring-2 focus:offset-2 focus:indigo-600 focus:outline-none bg-gray-100 mr-5 hover:bg-gray-200 py-2.5 px-5 rounded text-sm leading-3 text-gray-600">View</button>
                                    <button class="focus:ring-2 rounded-md focus:outline-none" role="button" aria-label="options">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/table_2-svg2.svg" alt="dropdown">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="h-20 text-sm leading-none text-gray-700 border-b border-gray-200 bg-white hover:bg-gray-100">
                            <td tabindex="0" class="focus:outline-none pl-4">06/02/2020</td>
                            <td tabindex="0" class="focus:ring-2 rounded-md focus:outline-none pl-10">IDO-2985-2</td>
                            <td class="pl-10">
                                <div class="flex items-center">
                                    <img tabindex="0" alt="boy avatar" class="focus:outline-none shadow-md rounded-full w-10 h-10 mr-3" src="https://cdn.tuk.dev/assets/templates/olympus/invoice(3).png" />
                                    <span tabindex="0" class="focus:outline-none">Kierra Curtis</span>
                                </div>
                            </td>
                            <td tabindex="0" class="focus:outline-none pl-10">$2100.00</td>
                            <td class="pl-10">
                                <div class="w-20 h-6 flex items-center justify-center bg-blue-100 rounded-full">
                                    <p tabindex="0" class="focus:outline-none text-xs leading-3 text-blue-700">Approved</p>
                                </div>
                            </td>
                            <td tabindex="0" class="focus:outline-none pl-10">Business</td>
                            <td class="pl-10">
                                <div class="flex items-center">
                                    <button class="focus:ring-2 focus:offset-2 focus:indigo-600 focus:outline-none bg-gray-100 mr-5 hover:bg-gray-200 py-2.5 px-5 rounded text-sm leading-3 text-gray-600">View</button>
                                    <button class="focus:ring-2 rounded-md focus:outline-none" role="button" aria-label="options">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/table_2-svg2.svg" alt="dropdown">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="h-20 text-sm leading-none text-gray-700 border-b border-gray-200 bg-white hover:bg-gray-100">
                            <td tabindex="0" class="focus:outline-none pl-4">06/02/2020</td>
                            <td tabindex="0" class="focus:outline-none pl-10">IDO-2985-2</td>
                            <td class="pl-10">
                                <div class="flex items-center">
                                    <img tabindex="0" alt="girl avatar" class="focus:outline-none shadow-md rounded-full w-10 h-10 mr-3" src="https://cdn.tuk.dev/assets/templates/olympus/invoice(4).png" />
                                    <span tabindex="0" class="focus:outline-none">Terry Ekstrom Bothman</span>
                                </div>
                            </td>
                            <td tabindex="0" class="focus:outline-none pl-10">$2100.00</td>
                            <td class="pl-10">
                                <div class="w-20 h-6 flex items-center justify-center bg-red-100 rounded-full">
                                    <p tabindex="0" class="focus:outline-none text-xs leading-3 text-red-700">Pending</p>
                                </div>
                            </td>
                            <td tabindex="0" class="focus:outline-none pl-10">Business</td>
                            <td class="pl-10">
                                <div class="flex items-center">
                                    <button class="focus:ring-2 focus:offset-2 focus:indigo-600 focus:outline-none bg-gray-100 mr-5 hover:bg-gray-200 py-2.5 px-5 rounded text-sm leading-3 text-gray-600">View</button>
                                    <button class="focus:ring-2 rounded-md focus:outline-none" role="button" aria-label="options">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/table_2-svg2.svg" alt="dropdown">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="h-20 text-sm leading-none text-gray-700 border-b border-gray-200 bg-white hover:bg-gray-100">
                            <td tabindex="0" class="focus:outline-none pl-4">06/02/2020</td>
                            <td tabindex="0" class="focus:outline-none pl-10">IDO-2985-2</td>
                            <td class="pl-10">
                                <div class="flex items-center">
                                    <img tabindex="0" alt="boy avatar" class="focus:outline-none shadow-md rounded-full w-10 h-10 mr-3" src="https://cdn.tuk.dev/assets/templates/olympus/invoice(6).png" />
                                    <span tabindex="0" class="focus:outline-none">Corey Vetrovs</span>
                                </div>
                            </td>
                            <td tabindex="0" class="focus:outline-none pl-10">$2100.00</td>
                            <td class="pl-10">
                                <div class="w-20 h-6 flex items-center justify-center bg-blue-100 rounded-full">
                                    <p tabindex="0" class="focus:outline-none text-xs leading-3 text-blue-700">Approved</p>
                                </div>
                            </td>
                            <td tabindex="0" class="focus:outline-none pl-10">Business</td>
                            <td class="pl-10">
                                <div class="flex items-center">
                                    <button class="focus:ring-2 focus:offset-2 focus:indigo-600 focus:outline-none bg-gray-100 mr-5 hover:bg-gray-200 py-2.5 px-5 rounded text-sm leading-3 text-gray-600">View</button>
                                    <button class="focus:ring-2 rounded-md focus:outline-none" role="button" aria-label="options">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/table_2-svg2.svg" alt="dropdown">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="h-20 text-sm leading-none text-gray-700 border-b border-gray-200 bg-white hover:bg-gray-100">
                            <td tabindex="0" class="focus:outline-none pl-4">06/02/2020</td>
                            <td tabindex="0" class="focus:outline-none pl-10">IDO-2985-2</td>
                            <td class="pl-10">
                                <div class="flex items-center">
                                    <img tabindex="0" alt="girl avatar" class="focus:outline-none shadow-md rounded-full w-10 h-10 mr-3" src="https://cdn.tuk.dev/assets/templates/olympus/invoice(7).png" />
                                    <span tabindex="0" class="focus:outline-none"> Zain George</span>
                                </div>
                            </td>
                            <td tabindex="0" class="focus:outline-none pl-10">$2100.00</td>
                            <td class="pl-10">
                                <div class="w-20 h-6 flex items-center justify-center bg-blue-100 rounded-full">
                                    <p tabindex="0" class="focus:outline-none text-xs leading-3 text-blue-700">Approved</p>
                                </div>
                            </td>
                            <td tabindex="0" class="focus:outline-none pl-10">Business</td>
                            <td class="pl-10">
                                <div class="flex items-center">
                                    <button class="focus:ring-2 focus:offset-2 focus:indigo-600 focus:outline-none bg-gray-100 mr-5 hover:bg-gray-200 py-2.5 px-5 rounded text-sm leading-3 text-gray-600">View</button>
                                    <button class="focus:ring-2 rounded-md focus:outline-none" role="button" aria-label="options">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/table_2-svg2.svg" alt="dropdown">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr tabindex="0" class="focus:outline-none h-20 text-sm leading-none text-gray-700 border-b border-gray-200 bg-white hover:bg-gray-100">
                            <td tabindex="0" class="focus:outline-none pl-4">06/02/2020</td>
                            <td tabindex="0" class="focus:outline-none pl-10">IDO-2985-2</td>
                            <td class="pl-10">
                                <div class="flex items-center">
                                    <img tabindex="0" alt="girl avatar" class="focus:outline-none shadow-md rounded-full w-10 h-10 mr-3" src="https://cdn.tuk.dev/assets/templates/olympus/invoice(8).png" />
                                    <span tabindex="0" class="focus:outline-none">Angel Saris</span>
                                </div>
                            </td>
                            <td tabindex="0" class="focus:outline-none pl-10">$2100.00</td>
                            <td class="pl-10">
                                <div class="w-20 h-6 flex items-center justify-center bg-red-100 rounded-full">
                                    <p tabindex="0" class="focus:outline-none text-xs leading-3 text-red-700">Pending</p>
                                </div>
                            </td>
                            <td tabindex="0" class="focus:outline-none pl-10">Business</td>
                            <td class="pl-10">
                                <div class="flex items-center">
                                    <button class="focus:ring-2 focus:offset-2 focus:indigo-600 focus:outline-none bg-gray-100 mr-5 hover:bg-gray-200 py-2.5 px-5 rounded text-sm leading-3 text-gray-600">View</button>
                                    <button class="focus:ring-2 rounded-md focus:outline-none" role="button" aria-label="options">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/table_2-svg2.svg" alt="dropdown">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="h-20 text-sm leading-none text-gray-700 bg-white hover:bg-gray-100">
                            <td tabindex="0" class="focus:outline-none pl-4">06/02/2020</td>
                            <td tabindex="0" class="focus:outline-none pl-10">IDO-2985-2</td>
                            <td class="pl-10">
                                <div class="flex items-center">
                                    <img tabindex="0" alt="woman avatar" class="focus:outline-none shadow-md rounded-full w-10 h-10 mr-3" src="https://cdn.tuk.dev/assets/templates/olympus/invoice(9).png" />
                                    <span tabindex="0" class="focus:outline-none">Desirae Dorwart</span>
                                </div>
                            </td>
                            <td tabindex="0" class="focus:outline-none pl-10">$2100.00</td>
                            <td class="pl-10">
                                <div class="w-20 h-6 flex items-center justify-center bg-blue-100 rounded-full">
                                    <p tabindex="0" class="focus:outline-none text-xs leading-3 text-blue-700">Approved</p>
                                </div>
                            </td>
                            <td tabindex="0" class="focus:outline-none pl-10">Business</td>
                            <td class="pl-10">
                                <div class="flex items-center">
                                    <button class="focus:ring-2 focus:offset-2 focus:indigo-600 focus:outline-none bg-gray-100 mr-5 hover:bg-gray-200 py-2.5 px-5 rounded text-sm leading-3 text-gray-600">View</button>
                                    <button class="focus:ring-2 rounded-md focus:outline-none" role="button" aria-label="options">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/table_2-svg2.svg" alt="dropdown">
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-owner-sidebar>
@endsection      
<tbody>
    <tr class="border-b border-gray-300">
        <td class="w-24 py-3 pl-3">
            <div class="flex items-center">
                <input placeholder="check box" type="checkbox" class="relative w-5 h-5 bg-white border border-gray-400 rounded cursor-pointer" onclick="tableInteract(this)" />
                <button onclick="accordionHandler(this)" class="ml-2 mr-2 text-gray-800 border border-transparent rounded cursor-pointer focus:outline-none focus:ring-2 focus:ring-gray-400 dark:text-gray-100 lg:ml-4 sm:mr-0" aria-label="Toggle Details" role="button">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg8.svg" alt="down">
                    <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg8dark.svg" alt="down">
                </button>
            </div>
        </td>
        <td class="w-32 pl-4 whitespace-no-wrap">
            <p class="text-xs font-normal leading-4 tracking-normal text-left text-gray-800 dark:text-gray-100">
                {{$title}}</p>
        </td>
        <td class="w-32 pl-4 whitespace-no-wrap">
            <div class="flex items-center justify-center w-20 h-6 bg-blue-100 rounded-md ">
                <span role="button" class="text-xs font-normal text-blue-700"> {{$description}}</span>
            </div>
        </td>
        <td class="w-32 pl-4 whitespace-no-wrap">
            <div class="flex items-center justify-center w-20 h-6 bg-blue-100 rounded-md">
                <span class="text-xs font-normal text-blue-700">{{$catagory}}</span>
            </div>
        </td>
        <td class="w-32 pl-4 whitespace-no-wrap">
            <p class="text-xs font-normal leading-4 tracking-normal text-left text-gray-800 dark:text-gray-100">h@12 st34, Chamanabad, dhoke sydean road rawalpindi</p>
        </td>
        <td class="w-32 pl-4 whitespace-no-wrap">
            <p class="text-xs font-normal leading-4 tracking-normal text-left text-gray-800 dark:text-gray-100">{{$contact_number}}</p>
        </td>
        <td class="w-32 pl-4 whitespace-no-wrap">
            <p class="text-xs font-normal leading-4 tracking-normal text-left text-gray-800 dark:text-gray-100">8 marla</p>
        </td>
        <td class="w-32 pl-4 whitespace-no-wrap">
            <p class="text-xs font-normal leading-4 tracking-normal text-left text-gray-800 dark:text-gray-100">2020</p>
        </td>
        <td class="w-32 pl-4 whitespace-no-wrap">
            <p class="text-xs font-normal leading-4 tracking-normal text-left text-gray-800 dark:text-gray-100">9000</p>
        </td>
        <td class="w-32 pl-4 pr-4 whitespace-no-wrap">
            <div class="flex items-center justify-center w-20 h-6 rounded-md">
                <a href="/admin/newtenant" class="text-xs font-normal text-blue-700">Edit Tenant</a>
            </div>
        </td>
    </tr>
    <tr class="detail-row">
        <td colspan="9">
            <div class="flex items-stretch w-full border-b border-gray-300 dark:border-gray-200">
                <ul>
                    <li class="flex items-center justify-center text-sm leading-3 tracking-normal cursor-pointer">
                        <a class="p-3 text-gray-800 border border-transparent dark:text-gray-100 hover:text-indigo-700 focus:bg-indigo-700 focus:text-white" href="javascript: void(0)">
                            <svg aria-label="Option 1" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                                <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="w-full bg-white border-l border-gray-300 dark:bg-gray-800">
                    <img>
                        </div>
                        <hr class="w-full my-6 border-t border-gray-300" />
                        <h5 class="mb-2 text-xs font-bold text-gray-600 dark:text-gray-400">Details</h5>
                        <p class="w-3/5 text-xs font-normal leading-6 text-gray-800 dark:text-gray-100">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>

                    </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>
</tbody>

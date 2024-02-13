import React from "react";

import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faMagnifyingGlass } from "@fortawesome/free-solid-svg-icons";
import Santri from "../../../public/img/logo/pngtree-cute-cartoon-muslimah-avatar-with-floral-frame-png-image_3805141.jpg";

const DataSantri = ({data}) => {
    return (
        <div className="a bg-pink-50 pt-32 pb-32">
            <div className=" a mx-w-[1320px] mx-auto max-w-sm flex flex-col justify-center my-6 pb-6">
                <h1 className="a text-3xl text-center font-Alegreya text-pink-500">
                    Data Santri Rumah Qur'an Qu
                </h1>
            </div>

            {/* kolom search */}

            {/* <form className="a w-1/2 mb-8 mx-auto">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Data Santri..." required/>
                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form> */}
            {/* end kolom search */}

            <div className="a pr-12 max-w-[1320px] grid mx-auto grid-cols-2 lg:grid-cols-5 gap-14 md:grid-cols-3 px-[10px] ml-10 text-center ">
                {data.map((santri) => (

                
                <div className="a shadow-lg bg-pink-100 rounded-lg">
                    <div className="a overflow-hidden">
                        <img
                            src={`/storage/${santri.img}`}
                            alt=""
                            className="a rounded-lg hover:rounded-lg p-4 hover:scale-125 duration-1000"
                        />
                    </div>
                    <h3 className="a pt-2 font-bold">Santri {santri.santri.nama}</h3>
                    <p className="a pb-2">Kelas : {santri.kategori.nama_kategori} </p>
                </div>
                ))}
                
                
                
            </div>
        </div>
    );
};

export default DataSantri;

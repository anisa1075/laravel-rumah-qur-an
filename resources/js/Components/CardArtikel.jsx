import React from 'react';
import Artikel1 from "../../../public/img/logo/Islamic-Wallpaper-Al-Quran-Karim-1024x768.jpg";
import { Link } from "@inertiajs/react";
import { data } from "autoprefixer";
import ShowArtikel from './ShowArtikel';
import { useState } from 'react';
import axios from 'axios';
import { text } from '@fortawesome/fontawesome-svg-core';
const baseUrl = 'http://127.0.0.1:8000/api/artikel';
import { usePage } from '@inertiajs/react';
import artikel from '../../Artikel.json';

const CardArtikel = ({ data }) => {
    const [searchTerm, setSearchTerm] = useState('');
    const dataArray = artikel.data;
    const filteredArtikel = dataArray.filter((val) => {
        if (searchTerm === '') {
            return val;
        } else if (val.judul.toLowerCase().includes(searchTerm.toLowerCase())) {
            return val;
        }
        return null;
    });
    // const { artikel } = usePage().props;
    // const [text, setText] = useState('');
    // const [artikels, setArtikels] = useState([]);
    // async function searchArtikel(){
    //     try{
    //         const response = await window.fetch(`${baseUrl}?q=${text}`);
    //         const data = await response.json();
    //         console.log('d', data)
    //         setArtikels(data.data)
    //     }catch(e){
    //         console.log(e)
    //     }
    // }
    // useEffect(()=> {
    //     axios.get('http://127.0.0.1:8000/api/artikel')
    // }, [])
    // const [artikels, setArtikels] = useState()
    // useEffect(() => {
    //     retrieveArtikels()
    // }, [])

    // const retrieveArtikels = async () => {
    //     try {
    //         const {data} = await axios.get('http://127.0.0.1:8000/api/artikel')
    //         // console.log(data, '<== response artikels' )
    //         setArtikels(data)
    //     }catch (error) {
    //         console.log(error, '<== error retrieve artikels')
    //     }
    // }

    return (
        <div>
            <div className="pt-32 pb-24 bg-pink-50">
                <div className=" a pt-6 mx-w-[1320px] mx-auto max-w-sm flex flex-col justify-center">
                    <h1 className="a font-bold text-3xl text-center font-Alegreya text-pink-500">
                        Artikel Rumah Qur'an Qu
                    </h1>
                    {/* <span className='a mt-2 inline-flex h-1 rounded bg-pink-500'></span> */}
                </div>

                {/* kolom search */}

                <div className="a w-1/2 mt-6 mx-auto">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" value={searchTerm}
                            onChange={(event) => {
                                setSearchTerm(event.target.value);
                            }}
                            id="searchInput" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Artikel..." required />
                        {/* <button type='submit' class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button> */}
                    </div>
                </div>
                {/* end kolom search */}
                <b><p className='a text-center pt-14 text-bold text-xl'>خَيْرُكُمْ مَنْ تَعَلَّمَ الْقُرْآنَ وَعَلَّمَهُ</p></b>
                <b><p className='a text-center pb-8 text-bold text-xl'>“Sebaik-baik kalian adalah orang yang belajar Al-Qur`an dan mengajarkannya.”</p></b>

                <div class="flex pt-14 items-center justify-center ">

                    <div class="grid grid-cols-2 px-5 gap-5 md:grid-cols-2 lg:grid-cols-3">

                        {filteredArtikel.map((val) => (

                            <div class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30 rounded-lg">

                                <div class="h-96 w-72">
                                    <img
                                        class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125 "
                                        src={`/storage/${val.img}`}
                                        alt=""
                                    />
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                                <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">



                                    <h1 class="a pb-6 font-dmserif text-2xl font-bold text-white">
                                        {val.judul}
                                    </h1>

                                    <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                        <span className='a font-semibold'> "Mari Membaca"<br /></span>
                                        Tentang artikel "{val.judul}" disini

                                    </p>
                                    <a> <Link href={`/desc/artikel/santri${val.id}`} component={ShowArtikel} class="rounded-full hover:bg-white hover:text-black bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">
                                        See More</Link>
                                    </a>
                                </div>
                            </div>
                        ))}

                    </div>

                </div>
            </div>
        </div>
    );
};

export default CardArtikel;
import React from 'react';
import { Label, TextInput } from 'flowbite-react';
import quran from "../../../public/img/logo/pngtree-akhwat-reading-quran-png-image_5345342-removebg-preview (1).png";
import { Button } from 'flowbite-react';
import { usePage } from '@inertiajs/react';
import axios from 'axios';
import { useState, useEffect } from 'react';

const DaftarProgram2 = () => {



    const { kategori } = usePage().props;
    return (
        <div className='a md:px-14 px-4 py-5 max-w-screen-2xl mx-auto bg-white'>

            <p className='a pt-36 pb-5 text-pink-500 text-center font-BeVietnamPro font-semibold text-2xl'>"Raih Keberkahan Dengan Al-Qur'an"</p>
            <h1 className='a pb-5 text-black text-center font-BeVietnamPro font-semibold text-3xl'>Form Pembayaran Program Qur'an</h1>
            <div
                className="my-20 md:my-8 flex flex-col md:flex-row-reverse items-center justify-between
                gap-12 ">


                {kategori && (
                    <form  className='a w-full '>

                        <TextInput className='a mb-4 mt-2 ' name='nama_kategori' value={kategori.nama_kategori} type="text" id="disabledInput1" placeholder="Masukkan Email" />
                        <TextInput className='a mb-4 mt-2 ' name='total_harga' value={kategori.harga} type="text" id="disabledInput1" placeholder="Masukkan Email" />

                        <Label className='a py-6' htmlFor="disabledInput1">Id Pembayaran</Label>
                        <TextInput className='a mb-4 mt-2 ' name='santri_id' type="number" id="disabledInput1" placeholder="Masukkan ID Pembayaran" />

                        <Label className='a py-6' htmlFor="disabledInput1" >Email</Label>
                        <TextInput className='a mb-4 mt-2 ' name='email' type="email" id="disabledInput1" placeholder="Masukkan Email" />

                        <Label htmlFor="disabledInput2">Nama Lengkap</Label>
                        <TextInput className='a mb-4 mt-2 ' name='nama' type="text" id="disabledInput2" placeholder="Masukkan Nama Lengkap" />

                        <Label htmlFor="disabledInput2">Nomor Rekening</Label>
                        <TextInput className='a mb-4 mt-2 ' name='rekening' type="text" id="disabledInput2" placeholder="Masukkan No Rekening" />

                        <a href='https://wa.me/6285267794627?text=Assalamualaikum%20Admin' className='a mt-5 px-10' type='submit' gradientMonochrome="pink">Daftar</a>

                    </form>
                )}



                <img src={quran} alt="" width="45%" className='a w-1/2' />
            </div>
        </div>
    );
};

export default DaftarProgram2;
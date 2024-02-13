import React from 'react';
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faUser } from "@fortawesome/free-solid-svg-icons";
// import { usePage } from '@inertiajs/react';

const DetailTestimoni = ({ data }) => {
    // bersihkan tag html
    const renderHTML = (htmlString) => {
        return { __html: htmlString };
      };

    return (
        <div className="a bg-pink-50 pt-32 pb-32">
            <div className=" a mx-w-[1320px] mx-auto max-w-sm flex flex-col justify-center my-6 pb-6">
                <h1 className="a text-2xl text-center justify-center font-Alegreya text-pink-500">
                    Testimoni Santri Rumah Qur'an Qu
                </h1>
                <span className='a mt-2 decoration-wavy underline inline-flex h-1 rounded bg-pink-500'></span>
            </div>



           

            <div className='a pr-12 pt-8 max-w-[2000px] grid mx-auto  gap-14 md:grid-cols-3 px-[10px] ml-10 text-center'>
            {data.map((testimoni) => (

            

               
                <div className='a h-full text-center mb-5 p-5 bg-pink-100 shadow-lg hover:bg-gray-50 rounded-2xl '>
                    <FontAwesomeIcon icon={faUser} className=" text-4xl px-4 pb-4 bg-opacity-10 items-center justify-center " />

                    <p className='a leading-relaxed' dangerouslySetInnerHTML={renderHTML(testimoni.deskripsi)}>

                    </p>
                    <span className='a inline-flex h-1 w-14 rounded bg-pink-400 mt-4 mb-2'></span>
                    <h2 className='a title-font font-semibold text-sm tracking-wider'>{testimoni.santri.nama}</h2>
                    <p className='a text-gray-500'>{testimoni.kategori.nama_kategori}</p>
                </div>
            ))}
            </div>
        </div>

    );
};

export default DetailTestimoni;
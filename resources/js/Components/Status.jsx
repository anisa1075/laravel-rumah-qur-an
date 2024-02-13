import React from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faCalendarCheck } from "@fortawesome/free-solid-svg-icons";
import { faChalkboardUser, faNewspaper, faGraduationCap } from "@fortawesome/free-solid-svg-icons";
import React1, { useState, useEffect } from 'react';
import { usePage } from '@inertiajs/react';

const Status = ({data}) => {
    const [totalGuru, setTotalGuru] = useState(10);
    const { kategori1 } = usePage().props;
    const { guru } = usePage().props;
    const { artikel } = usePage().props;
    const { santri } = usePage().props;

    useEffect(() => {
      // Lakukan permintaan HTTP ke endpoint yang menyediakan jumlah data guru
      fetch('URL_ENDPOINT_GURU')
        .then(response => response.json())
        .then(data => {
          // Mengambil jumlah data guru dari respons
          const { guruCount } = data; // Pastikan nama properti disesuaikan dengan respons yang diterima
          setTotalGuru(guruCount);
        })
        .catch(error => {
          console.error('Error fetching data:', error);
        });
    }, []);
    
    return (
        <div>
            
            <div className="a py-28 px-4 lg:px-14 max-w-screen-2xl mx-auto pb-40">
                <div className="flex flex-col md:flex-row justify-between items-center gap-8">

                <div className="md:w-1/2 pb-26">
                    <h2 className="text-4xl text-black font-semibold mb-4 md:w-2/3 font-Alegreya">
                        {" "}
                        Data Status Informasi <br />
                        <span className="a text-pink-500">Rumah Qur'an Qu</span>
                    </h2>
                    <p className="a font-Poppins">
                        Status Jumlah Data Program Kegiatan, Data Guru, Data Artikel
                        <br /> dan Data Santri di Rumah Qur'an Qu. Mari bergabung menjadi bagian santri Rumah Qur'an Qu
                    </p>
                </div>

                
                <div className="md:w-1/2 mx-auto px-4 flex sm:flex-row flex-col sm:items-center justify-around gap-12">
                    

                    
                    <div className="a space-y-8">
                        <div className="flex items-center gap-7">
                            <FontAwesomeIcon icon={faCalendarCheck} className=" text-4xl " />
                            <div>
                                <h4 className="text-2xl text-black font-semibold">{kategori1}</h4>
                                <p className="a text-2xl font-Alegreya">Program</p>
                            </div>
                        </div>

                        
                        <div className="flex items-center gap-4">
                            <FontAwesomeIcon icon={faChalkboardUser} className=" text-4xl " />
                            <div>
                                <h4 className="text-2xl text-black font-semibold">{guru}</h4>
                                <p className="a text-2xl font-Alegreya">Guru</p>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div className="a space-y-8">
                        <div className="flex items-center gap-4">
                            <FontAwesomeIcon icon={faNewspaper} className=" text-4xl " />
                            <div>
                                <h4 className="text-2xl text-black font-semibold">{artikel}</h4>
                                <p className="a text-2xl font-Alegreya">Artikel</p>
                            </div>
                        </div>
                        <div className="flex items-center gap-4">
                            <FontAwesomeIcon icon={faGraduationCap} className=" text-4xl " />
                            <div>
                                <h4 className="text-2xl text-black font-semibold">{santri}</h4>
                                <p className="a text-2xl font-Alegreya">Santri</p>
                            </div>
                        </div>
                    </div>
                  
                </div>

                </div>
            </div>
        </div>
    );
};

export default Status;

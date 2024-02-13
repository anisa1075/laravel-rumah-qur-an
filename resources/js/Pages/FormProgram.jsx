import React from 'react';
import Navbar from '../Components/Navbar';
import DaftarProgram from '../Components/DaftarProgram';
import Footer from '../Components/Footer';

const FormProgram = ({kategori}) => {
    return (
        <>
            <Navbar data={kategori}/>
            <DaftarProgram data={kategori}/>
            <Footer/>
        </>
    );
};

export default FormProgram;
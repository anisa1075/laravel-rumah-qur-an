import React from 'react';
import Navbar from '../Components/Navbar';
import DetailProgram from '../Components/DetailProgram';
import Footer from '../Components/Footer';

const Program = ({kategori, kategori1}) => {
    return (
        <>
            <Navbar data={kategori1}/>
            <DetailProgram data={kategori}/>
            <Footer/>
        </>
    );
};

export default Program;
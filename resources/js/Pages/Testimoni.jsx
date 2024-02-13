import React from 'react';
import Navbar from '../Components/Navbar';
import DetailTestimoni from '../Components/DetailTestimoni';
import Footer from '../Components/Footer';

const Testimoni = ({testimoni, kategori}) => {
    return (
        <>
            <Navbar data={kategori}/>
            <DetailTestimoni data={testimoni}/>
            <Footer/>
        </>
    );
};

export default Testimoni;
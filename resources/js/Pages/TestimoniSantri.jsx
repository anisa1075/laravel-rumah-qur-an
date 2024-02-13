import React from 'react';
import NavbarSantri from '../Components/NavbarSantri'
import DetailTestimoni from '../Components/DetailTestimoni';
import Footer from '../Components/Footer';
const TestimoniSantri = ({testimoni, kategori}) => {
    return (
        <>
            <NavbarSantri data={kategori}/>
            <DetailTestimoni data={testimoni}/>
            <Footer/>
        </>
    );
};

export default TestimoniSantri;
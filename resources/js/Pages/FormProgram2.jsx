import React from 'react';
import NavbarSantri from '../Components/NavbarSantri'
import DaftarProgram2 from '../Components/DaftarProgram2';
import Footer from '../Components/Footer';

const FormProgram2 = ({kategori, kategori1}) => {
    return (
        <>
            <NavbarSantri data={kategori1}/>
            <DaftarProgram2 data={kategori}/>
            <Footer/>
        </>
    );
};

export default FormProgram2;
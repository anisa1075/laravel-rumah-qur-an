import React from 'react';
import NavbarSantri from '../Components/NavbarSantri'
import DetailProgram2 from '../Components/DetailProgram2'
import Footer from '../Components/Footer';

const ProgramSantri = ({kategori, kategori1}) => {
    return (
        <div>
            <NavbarSantri data={kategori1}/>
            <DetailProgram2 data={kategori}/>
            <Footer/>
        </div>
    );
};

export default ProgramSantri;
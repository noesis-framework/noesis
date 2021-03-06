import React from 'react';
import Header from '../Components/Header';
import Heading from '../Components/Heading';

export default function Home(props) {
    return (
<div>
    <Header {...props} />
    <div className="p-6">Home</div>

    <div className="w-4/6 border bg-white shadow overflow-hidden sm:rounded-lg mx-auto p-6">
        <Heading size="1">{ props.message }</Heading>
    </div>
</div>
    )
};

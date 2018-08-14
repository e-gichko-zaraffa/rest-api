import React from 'react';
import ReactDOM from 'react-dom';
import Application from './Application';

const root = document.getElementById('root');

if (root) {
    try {
        ReactDOM.render(<Application/>, root);
    } catch (error) {
        console.error(error);
    }
}

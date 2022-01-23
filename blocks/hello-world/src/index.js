import { registerBlockType } from '@wordpress/blocks';

import json from '../block.json';

const { name } = json;

registerBlockType(name, {

    edit() {
        return <h1>Hello World (editor)</h1>;
    },

    save() {
        return <h1>Hello World</h1>;
    }
})
/**
 * BLOCK: my-block
 *
 * Registering a basic block with Gutenberg.
 * Simple block, renders and saves the same content without any interactivity.
 */
import { TextControl,Button,SelectControl } from '@wordpress/components';
import { useState, useEffect } from '@wordpress/element';
import {InspectorControls} from '@wordpress/block-editor';



//  Import CSS.
import './editor.scss';
import './style.scss';

const { __ } = wp.i18n; // Import __() from wp.i18n
const { registerBlockType } = wp.blocks; // Import registerBlockType() from wp.blocks

/**
 * Register: aa Gutenberg Block.
 *
 * Registers a new block provided a unique name and an object defining its
 * behavior. Once registered, the block is made editor as an option to any
 * editor interface where blocks are implemented.
 *
 * @link https://wordpress.org/gutenberg/handbook/block-api/
 * @param  {string}   name     Block name.
 * @param  {Object}   settings Block settings.
 * @return {?WPBlock}          The block, if it has been successfully
 *                             registered; otherwise `undefined`.
 */
registerBlockType('cgb/block-my-block', {
	// Block name. Block names must be string that contains a namespace prefix. Example: my-plugin/my-custom-block.
	title: __('my-block - CGB Block'), // Block title.
	icon: 'shield', // Block icon from Dashicons → https://developer.wordpress.org/resource/dashicons/.
	category: 'common', // Block category — Group blocks together based on common traits E.g. common, formatting, layout widgets, embed.
	keywords: [
		__('my-block — CGB Block'),
		__('CGB Example'),
		__('create-guten-block'),
	],
	attributes: {
		buttonText: {
			type: 'string',
			default: 'Click Me'
		},
		url: {
			type: 'string',
			default: '#'
		},
		buttonTarget: {
			type: 'string',
			default: '_self'
		}
	},
	edit: (props) => {
		// Creates a <p class='wp-block-cgb-block-my-block'></p>.

		const [buttonText, setButtontext] = useState(props.attributes.buttonText );
		const [url, setUrl] = useState(props.attributes.url );
		const [ buttonTarget, setButtonTarget ] = useState( props.attributes.buttonTarget  );

		
		useEffect( () => {
			props.setAttributes( { buttonText, url, buttonTarget } )
		}, [ buttonText, url, buttonTarget ] )

		return (
			<div className={props.className}>

				

				<InspectorControls key="setting">

					<TextControl
						label="Enter Url"
						value={url}
						onChange={(value) => setUrl(value)} />
				

					<TextControl
						label="Enter Button Text"
						value={buttonText}
						onChange={(value) => setButtontext(value)} />

					<SelectControl
						label="Select Option"
						value={ buttonTarget }
						options={ [
							{ label: 'Same Windoow', value: '1' },
							{ label: 'New Tab', value: '2' },
							{ label: 'New Window', value: '3' },
						] }
						onChange={ (value) => setButtonTarget( value ) }
					/>

				</InspectorControls>

				
				<a target={buttonTarget} href={url}>{buttonText}</a>
			
			</div>
		);
	},

	/**
	 * The save function defines the way in which the different attributes should be combined
	 * into the final markup, which is then serialized by Gutenberg into post_content.
	 *
	 * The "save" property must be specified and must be a valid function.
	 *
	 * @link https://wordpress.org/gutenberg/handbook/block-api/block-edit-save/
	 *
	 * @param {Object} props Props.
	 * @returns {Mixed} JSX Frontend HTML.
	 */
	save: (props) => {
		return (
			<div className={props.className}>
				<p>— Hello from the frontend.</p>
				<p>
					CGB BLOCK: <code>my-block</code> is a new Gutenberg block.
				</p>
				<p>
					It was created via{' '}
					<code>
						<a href="https://github.com/ahmadawais/create-guten-block">
							create-guten-block
						</a>
					</code>.
				</p>
			</div>
		);
	},
});

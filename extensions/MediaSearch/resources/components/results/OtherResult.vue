<template>
	<div v-if="imageinfo" class="sdms-other-result">
		<a
			v-if="thumbnail"
			class="sdms-other-result__thumbnail-wrapper"
			:href="canonicalurl"
			:title="title"
			:style="style"
			@click="$emit('click')"
		>
			<sdms-image :source="thumbnail" :alt="displayName"></sdms-image>
		</a>
		<div class="sdms-other-result__text">
			<h3 v-if="displayName">
				<a :href="canonicalurl"
					:title="title"
					@click="$emit('click')"
				>
					{{ displayName }}
				</a>
			</h3>
			<p class="sdms-other-result__meta">
				<span v-if="extension" class="sdms-other-result__extension">
					{{ extension }}
				</span>

				<span class="sdms-other-result__resolution" dir="ltr">{{ resolution }}</span>

				<span
					v-if="imageSize"
					class="sdms-other-result__imageSize"
					v-i18n-html:mediasearch-image-size="[
						formatSize( imageSize )
					]">
				</span>
			</p>
		</div>
	</div>
</template>

<script>
var SdImage = require( './../base/Image.vue' );

/**
 * @file OtherResult.vue
 *
 * Represents mediatypes other than image, audio, and video.
 */
var searchResult = require( '../../mixins/searchResult.js' );

// @vue/component
module.exports = {
	name: 'OtherResult',

	components: {
		'sdms-image': SdImage
	},

	mixins: [ searchResult ],

	inheritAttrs: false,

	computed: {
		/**
		 * Get file extension.
		 *
		 * @return {string|null}
		 */
		extension: function () {
			var title = mw.Title.newFromText( this.title );
			return title ? title.getExtension().toUpperCase() : null;
		},

		/**
		 * @return {string|null}
		 */
		resolution: function () {
			var width = this.imageinfo[ 0 ].width,
				height = this.imageinfo[ 0 ].height;

			if ( width && height ) {
				return this.formatNumber( width ) + ' × ' + this.formatNumber( height );
			} else {
				return null;
			}
		},

		/**
		 * Raw image size.
		 *
		 * @return {number|null}
		 */
		imageSize: function () {
			return this.imageinfo[ 0 ].size ? this.imageinfo[ 0 ].size : null;
		},

		/**
		 * @return {string|undefined}
		 */
		thumbnail: function () {
			return this.imageinfo[ 0 ].thumburl;
		},

		/**
		 * @return {number}
		 */
		thumbheight: function () {
			return this.imageinfo[ 0 ].thumbheight;
		},

		/**
		 * @return {number}
		 */
		thumbwidth: function () {
			return this.imageinfo[ 0 ].thumbwidth;
		},

		/**
		 * @return {Object} style object with width and height properties
		 */
		style: function () {
			var desiredWidth = 120;

			return {
				width: desiredWidth + 'px',
				height: Math.round( this.thumbheight / this.thumbwidth * desiredWidth ) + 'px'
			};
		}
	}
};
</script>

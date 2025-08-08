<?php
/**
 * @author g-flame
 * @copyright Copyright (c) 2024, g-flame
 * @license MIT
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

/**
 * Modern Dark Theme Class for ownCloud
 * Provides configuration for ultra-modern dark theme with contemporary branding
 */
class OC_Theme {

	/**
	 * Returns the base URL for the organization
	 * @return string URL
	 */
	public function getBaseUrl() {
		return 'https://nexuscloud.tech';
	}

	/**
	 * Returns the URL where the sync clients are listed
	 * @return string URL
	 */
	public function getSyncClientUrl() {
		return 'https://nexuscloud.tech/downloads';
	}

	/**
	 * Returns the URL to the App Store for the iOS Client
	 * @return string URL
	 */
	public function getiOSClientUrl() {
		return 'https://apps.apple.com/us/app/nexus-cloud/id1359583808';
	}

	/**
	 * Returns the AppId for the App Store for the iOS Client
	 * @return string AppId
	 */
	public function getiTunesAppId() {
		return '1359583808';
	}

	/**
	 * Returns the URL to Google Play for the Android Client
	 * @return string URL
	 */
	public function getAndroidClientUrl() {
		return 'https://play.google.com/store/apps/details?id=tech.nexuscloud.android';
	}

	/**
	 * Returns the documentation URL
	 * @return string URL
	 */
	public function getDocBaseUrl() {
		return 'https://docs.nexuscloud.tech';
	}

	/**
	 * Returns the main title displayed in browser tabs and headers
	 * @return string title
	 */
	public function getTitle() {
		return 'NexusCloud - Next Generation Cloud Storage';
	}

	/**
	 * Returns the short name of the platform
	 * @return string title
	 */
	public function getName() {
		return 'NexusCloud';
	}

	/**
	 * Returns the short name with HTML styling for enhanced branding
	 * @return string HTML formatted title
	 */
	public function getHTMLName() {
		return '<span class="brand-name"><strong>Nexus</strong><span class="brand-accent">Cloud</span></span>';
	}

	/**
	 * Returns entity name for footer and copyright notices
	 * @return string entity name
	 */
	public function getEntity() {
		return 'NexusCloud Technologies';
	}

	/**
	 * Returns the marketing slogan/tagline
	 * @return string slogan
	 */
	public function getSlogan() {
		return 'Secure • Fast • Intelligent Cloud Storage';
	}

	/**
	 * Returns logo claim with modern branding
	 * @return string HTML logo claim
	 */
	public function getLogoClaim() {
		return '<a href="https://nexuscloud.tech/enterprise" class="logo-claim-link" title="Enterprise Solutions">
					<span class="claim-text">Enterprise Ready</span>
					<span class="claim-icon">⚡</span>
				</a>';
	}

	/**
	 * Returns privacy policy URL from app configuration
	 * @return string privacy policy URL
	 */
	public function getPrivacyPolicyUrl() {
		try {
			return \OC::$server->getConfig()->getAppValue('core', 'legal.privacy_policy_url', 'https://nexuscloud.tech/privacy');
		} catch (\Exception $e) {
			return 'https://nexuscloud.tech/privacy';
		}
	}

	/**
	 * Returns imprint/legal notice URL from app configuration
	 * @return string imprint URL
	 */
	public function getImprintUrl() {
		try {
			return \OC::$server->getConfig()->getAppValue('core', 'legal.imprint_url', 'https://nexuscloud.tech/legal');
		} catch (\Exception $e) {
			return 'https://nexuscloud.tech/legal';
		}
	}

	/**
	 * Returns terms of service URL
	 * @return string terms URL
	 */
	public function getTermsUrl() {
		return 'https://nexuscloud.tech/terms';
	}

	/**
	 * Returns support/help center URL
	 * @return string support URL
	 */
	public function getSupportUrl() {
		return 'https://support.nexuscloud.tech';
	}

	/**
	 * Returns localization object for translations
	 * @return \OCP\IL10N localization object
	 */
	public function getL10n() {
		return \OC::$server->getL10N('core');
	}

	/**
	 * Returns compact footer with essential links
	 * @return string HTML footer content
	 */
	public function getShortFooter() {
		$l10n = $this->getL10n();
		$currentYear = date("Y");
		
		$footer = '<div class="footer-content">';
		$footer .= '<div class="footer-main">';
		$footer .= '© ' . $currentYear . ' <a href="' . $this->getBaseUrl() . '" target="_blank" rel="noopener" class="entity-link">' . $this->getEntity() . '</a>';
		$footer .= '<span class="footer-separator">•</span>';
		$footer .= '<span class="footer-slogan">' . $this->getSlogan() . '</span>';
		$footer .= '</div>';
		
		$footer .= '<div class="footer-links">';
		
		if ($this->getPrivacyPolicyUrl() !== '') {
			$footer .= '<a href="' . $this->getPrivacyPolicyUrl() . '" target="_blank" rel="noopener" class="footer-link">' . $l10n->t('Privacy') . '</a>';
		}
		
		if ($this->getImprintUrl() !== '') {
			$footer .= '<a href="' . $this->getImprintUrl() . '" target="_blank" rel="noopener" class="footer-link">' . $l10n->t('Legal') . '</a>';
		}
		
		$footer .= '<a href="' . $this->getTermsUrl() . '" target="_blank" rel="noopener" class="footer-link">' . $l10n->t('Terms') . '</a>';
		$footer .= '<a href="' . $this->getSupportUrl() . '" target="_blank" rel="noopener" class="footer-link">' . $l10n->t('Support') . '</a>';
		$footer .= '</div>';
		$footer .= '</div>';
		
		return $footer;
	}

	/**
	 * Returns expanded footer with additional information and social links
	 * @return string HTML footer content
	 */
	public function getLongFooter() {
		$l10n = $this->getL10n();
		$currentYear = date("Y");
		
		$footer = '<div class="footer-extended">';
		$footer .= '<div class="footer-brand">';
		$footer .= '<div class="footer-logo">' . $this->getHTMLName() . '</div>';
		$footer .= '<p class="footer-description">' . $this->getSlogan() . '</p>';
		$footer .= '</div>';
		
		$footer .= '<div class="footer-sections">';
		$footer .= '<div class="footer-section">';
		$footer .= '<h4>Platform</h4>';
		$footer .= '<a href="' . $this->getSyncClientUrl() . '" target="_blank" rel="noopener">' . $l10n->t('Downloads') . '</a>';
		$footer .= '<a href="' . $this->getDocBaseUrl() . '" target="_blank" rel="noopener">' . $l10n->t('Documentation') . '</a>';
		$footer .= '<a href="' . $this->getSupportUrl() . '" target="_blank" rel="noopener">' . $l10n->t('Support') . '</a>';
		$footer .= '</div>';
		
		$footer .= '<div class="footer-section">';
		$footer .= '<h4>Legal</h4>';
		if ($this->getPrivacyPolicyUrl() !== '') {
			$footer .= '<a href="' . $this->getPrivacyPolicyUrl() . '" target="_blank" rel="noopener">' . $l10n->t('Privacy Policy') . '</a>';
		}
		if ($this->getImprintUrl() !== '') {
			$footer .= '<a href="' . $this->getImprintUrl() . '" target="_blank" rel="noopener">' . $l10n->t('Imprint') . '</a>';
		}
		$footer .= '<a href="' . $this->getTermsUrl() . '" target="_blank" rel="noopener">' . $l10n->t('Terms of Service') . '</a>';
		$footer .= '</div>';
		$footer .= '</div>';
		
		$footer .= '<div class="footer-bottom">';
		$footer .= '<p class="copyright">© ' . $currentYear . ' ' . $this->getEntity() . '. ' . $l10n->t('All rights reserved.') . '</p>';
		$footer .= '<div class="footer-meta">';
		$footer .= '<span class="version-info">v' . $this->getVersionString() . '</span>';
		$footer .= '<span class="build-info">Built with ❤️</span>';
		$footer .= '</div>';
		$footer .= '</div>';
		$footer .= '</div>';
		
		return $footer;
	}

	/**
	 * Builds documentation link for specific topics
	 * @param string $key Documentation section key
	 * @return string Complete documentation URL
	 */
	public function buildDocLinkToKey($key) {
		return $this->getDocBaseUrl() . '/guides/' . $key;
	}

	/**
	 * Returns the primary brand color for email headers
	 * Matches the modern purple theme from CSS
	 * @return string Hex color code
	 */
	public function getMailHeaderColor() {
		return '#8b5cf6'; // Modern purple matching CSS theme
	}

	/**
	 * Returns secondary brand color for accents
	 * @return string Hex color code
	 */
	public function getAccentColor() {
		return '#a78bfa'; // Light purple accent
	}

	/**
	 * Returns background color for dark theme consistency
	 * @return string Hex color code
	 */
	public function getBackgroundColor() {
		return '#0a0a0f'; // Deep dark background
	}

	/**
	 * Returns text color for dark theme
	 * @return string Hex color code
	 */
	public function getTextColor() {
		return '#f8fafc'; // Light text for dark theme
	}

	/**
	 * Returns version string for footer display
	 * @return string Version information
	 */
	private function getVersionString() {
		try {
			return \OC_Util::getVersionString();
		} catch (\Exception $e) {
			return '2024.1';
		}
	}

	/**
	 * Returns custom CSS classes for theme elements
	 * @return array CSS class mappings
	 */
	public function getThemeClasses() {
		return [
			'primary' => 'nexus-primary',
			'secondary' => 'nexus-secondary', 
			'accent' => 'nexus-accent',
			'background' => 'nexus-bg',
			'surface' => 'nexus-surface',
			'text' => 'nexus-text'
		];
	}

	/**
	 * Returns OpenGraph meta data for social sharing
	 * @return array Meta data
	 */
	public function getOpenGraphData() {
		return [
			'og:site_name' => $this->getName(),
			'og:title' => $this->getTitle(),
			'og:description' => $this->getSlogan(),
			'og:url' => $this->getBaseUrl(),
			'og:type' => 'website',
			'og:image' => $this->getBaseUrl() . '/themes/nexus/img/og-image.png',
			'twitter:card' => 'summary_large_image',
			'twitter:site' => '@nexuscloud'
		];
	}

	/**
	 * Returns custom login message
	 * @return string Welcome message
	 */
	public function getLoginMessage() {
		return 'Welcome to the future of cloud storage';
	}

	/**
	 * Returns dashboard welcome text
	 * @return string Welcome text
	 */
	public function getDashboardWelcome() {
		return 'Your files, everywhere you need them';
	}
}
?>
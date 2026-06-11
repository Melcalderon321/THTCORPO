<?php
// Extracted inline styles from index.html
?>
/* Unit Cards - Accenture Style */
.unit-card {
position: relative;
height: 550px;
background: #000;
border: 1px solid rgba(255, 255, 255, 0.1);
border-radius: 0;
overflow: hidden;
display: flex;
flex-direction: column;
transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
text-align: left;
cursor: pointer;
}

.unit-card:hover {
border-color: var(--primary-blue);
}

.unit-card-content {
position: relative;
padding: 3rem;
height: 100%;
z-index: 3;
display: flex;
flex-direction: column;
justify-content: flex-start;
}

.unit-card-label {
font-size: 0.75rem;
font-weight: 800;
letter-spacing: 0.25em;
text-transform: uppercase;
color: #fff;
margin-bottom: 1.5rem;
display: block;
font-family: 'Inter', sans-serif;
}

.unit-card-title {
font-size: 2.25rem;
font-weight: 700;
line-height: 1.1;
margin-bottom: 2rem;
color: #fff;
transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}

.unit-card-logo {
transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
transform-origin: left center;
}

.unit-card:hover .unit-card-logo {
transform: scale(1.05);
}

.unit-card-description {
font-size: 1rem;
font-weight: 500;
color: rgba(255, 255, 255, 0.8);
line-height: 1.6;
margin-bottom: 2rem;
opacity: 0;
transform: translateY(20px);
transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
max-height: 0;
overflow: hidden;
}

.unit-card:hover .unit-card-description {
opacity: 1;
transform: translateY(0);
max-height: 300px;
}

.unit-card-link {
margin-top: auto;
align-self: flex-start;
opacity: 0;
transform: translateX(-10px);
transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
}

.unit-card:hover .unit-card-link {
opacity: 1;
transform: translateX(0);
}

.unit-card-image {
position: absolute;
inset: 0;
width: 100%;
height: 100%;
object-fit: cover;
z-index: 1;
transition: transform 1.2s cubic-bezier(0.16, 1, 0.3, 1), filter 0.6s ease;
filter: brightness(0.7);
}

.unit-card:hover .unit-card-image {
transform: scale(1.1);
filter: brightness(0.4) blur(2px);
}

.unit-card-overlay {
position: absolute;
inset: 0;
background: linear-gradient(to bottom,
rgba(0, 0, 0, 0.8) 0%,
transparent 40%,
transparent 60%,
rgba(0, 0, 0, 0.9) 100%);
z-index: 2;
transition: background 0.6s ease;
}

.unit-card:hover .unit-card-overlay {
background: rgba(0, 0, 0, 0.85);
}

/* ADN & Culture - Netflix Style */
.giant-text {
font-size: clamp(2.5rem, 8vw, 7.5rem);
font-weight: 700;
line-height: 1.1;
letter-spacing: 0;
text-transform: uppercase;
color: transparent;
-webkit-text-stroke: 2px #ffffff;
padding: 0.1em 0;
transition: all 1s cubic-bezier(0.16, 1, 0.3, 1);
}

.giant-text.active {
-webkit-text-stroke: 3px #fff;
}

.scroll-reveal-text {
opacity: 0.1;
transition: opacity 0.3s ease;
}

.huge-title {
font-size: clamp(3rem, 9vw, 8.5rem);
font-weight: 700;
line-height: 1.1;
letter-spacing: 0;
text-transform: uppercase;
text-align: center;
padding: 0.1em 0;
color: #fff;
}

.typo-window {
display: block;
width: 18vw;
height: 10vw;
min-width: 120px;
min-height: 70px;
border-radius: 1.5vw;
overflow: hidden;
position: relative;
border: 1px solid rgba(255, 255, 255, 0.2);
box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
}

.play-indicator {
position: absolute;
inset: 0;
display: flex;
align-items: center;
justify-content: center;
background: rgba(0, 0, 0, 0.3);
transition: all 0.3s ease;
}

.play-indicator svg {
width: 3vw;
height: 3vw;
min-width: 24px;
min-height: 24px;
color: white;
filter: drop-shadow(0 0 10px rgba(0, 102, 255, 0.5));
}

.highlight-card {
padding: 2rem;
border: 1px solid rgba(255, 255, 255, 0.15);
border-left: 4px solid #3b82f6;
background: rgba(255, 255, 255, 0.07);
backdrop-filter: blur(24px);
-webkit-backdrop-filter: blur(24px);
border-radius: 0 1.5rem 1.5rem 0;
position: relative;
transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4), inset 0 0 20px rgba(255, 255, 255, 0.05);
}

.highlight-card:hover {
background: rgba(255, 255, 255, 0.05);
transform: translateX(10px);
}

.section-badge {
display: inline-block;
padding: 0.4rem 1.25rem;
border-radius: 9999px;
background: rgba(0, 102, 255, 0.1);
border: 1px solid rgba(0, 102, 255, 0.2);
color: #60a5fa;
font-size: 0.7rem;
font-weight: 800;
text-transform: uppercase;
letter-spacing: 0.3em;
line-height: 1;
}

.reveal-container {
overflow: hidden;
display: block;
}

.reveal-item {
transform: translateY(100%);
padding: 0.1em 0;
transition: transform 1s cubic-bezier(0.16, 1, 0.3, 1);
}

/* Experience Scroll Section */
.experience-sticky {
position: relative;
background: #000;
}

.culture-pillar {
opacity: 0.5;
transform: scale(0.9);
filter: blur(4px);
transition: all 0.6s ease;
}

.culture-pillar.active {
opacity: 1;
transform: scale(1);
filter: blur(0);
}

.culture-image-container {
position: sticky;
top: 20%;
height: 60vh;
border-radius: 2rem;
overflow: hidden;
}

/* ADN Cards */
.adn-card {
background: rgba(255, 255, 255, 0.03);
border: 1px solid rgba(255, 255, 255, 0.05);
border-radius: 20px;
padding: 2rem;
text-align: left;
transition: all 0.3s ease;
}

.adn-card:hover {
border-color: var(--primary-blue);
background: rgba(0, 102, 255, 0.05);
}

/* Custom Scrollbar */
::-webkit-scrollbar {
width: 8px;
}

::-webkit-scrollbar-track {
background: #050505;
}

::-webkit-scrollbar-thumb {
background: #222;
border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
background: var(--primary-blue);
}

.text-gradient {
background: linear-gradient(to bottom, #ffffff, #999999);
-webkit-background-clip: text;
background-clip: text;
-webkit-text-fill-color: transparent;
}

.flag-circle {
width: 48px;
height: 48px;
border-radius: 50%;
object-fit: cover;
border: 2px solid rgba(255, 255, 255, 0.1);
}

/* Word Animation */
.word-animation span {
display: inline-block;
opacity: 0;
transform: translateY(20px);
}

/* Footer Background & Geometric Wings */
.footer-bg-wrapper {
background: linear-gradient(to bottom, #003399 0%, #050a1f 100%);
position: relative;
overflow: hidden;
}

.footer-bg-wrapper::before,
.footer-bg-wrapper::after {
content: '';
position: absolute;
bottom: 0;
width: 40%;
height: 120px;
background: linear-gradient(135deg, rgba(0, 102, 255, 0.2) 0%, transparent 60%);
pointer-events: none;
z-index: 1;
}

.footer-bg-wrapper::before {
left: 0;
clip-path: polygon(0 100%, 0 0, 100% 100%);
border-bottom: 2px solid rgba(255, 255, 255, 0.1);
}

.footer-bg-wrapper::after {
right: 0;
background: linear-gradient(-135deg, rgba(0, 102, 255, 0.2) 0%, transparent 60%);
clip-path: polygon(0 100%, 100% 0, 100% 100%);
border-bottom: 2px solid rgba(255, 255, 255, 0.1);
}

.footer-wing-accent {
position: absolute;
bottom: 0;
width: 30%;
height: 60px;
background: #001a4d;
z-index: 2;
opacity: 0.8;
}

.left-wing {
left: 0;
clip-path: polygon(0 100%, 100% 100%, 0 0);
}

.right-wing {
right: 0;
clip-path: polygon(0 100%, 100% 100%, 100% 0);
}
# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Repository Overview

This is Evan Rusackas's personal GitHub Pages website (rusackas.github.io). The repository contains:
- A minimalist placeholder landing page (`index.html`)
- An experimental webcam RGB display visualization (`tv.html`)
- Legacy website code (`index.old.html`)
- Static assets including resume PDFs, JavaScript libraries, and images

## Key Files

- `index.html` - Current live site: simple placeholder page with contact link
- `tv.html` - Experimental webcam visualization that displays video as RGB pixels in a table grid
- `index.old.html` - Previous portfolio/gallery site implementation
- `CNAME` - GitHub Pages custom domain configuration

## Development Notes

### Working with tv.html
The experimental visualization captures webcam feed and displays it as a grid of RGB color components. Key functions:
- `rgbToHsl()` / `hslToRgb()` - Color space conversion
- `brightenColor()` - Adjusts brightness using HSL manipulation
- `draw()` - Main rendering loop using requestAnimationFrame

### Dependencies
The project uses bower components for legacy libraries:
- colorbox
- tweenjs
- blockui
- animatescroll
- jInvertScroll

No build process or package.json exists - this is a static site served directly by GitHub Pages.

### Git Workflow
- Main branch: `master`
- The site is automatically deployed via GitHub Pages when pushing to master
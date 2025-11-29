# Random Image Selector - PHP Implementation

**Date:** 2025-11-16
**Purpose:** Create a PHP-based tool for browsing and downloading random images from the collection

## Overview

A standalone PHP page that displays 30-40 randomly selected images from across all fullsize directories, with download links for each image. Used locally to quickly browse the collection and save selected images to highlight.

## Use Case

- Run locally via web server
- Browse random selection of images from ~3,000 image collection
- Click download links to save specific images to a new directory
- Refresh page for new random selection

## Core Logic

### Constants
```php
define('TARGET_COUNT', 35);  // Easily editable
define('IMG_EXTENSIONS', ['webp', 'jpg', 'jpeg', 'png', 'gif']);
```

### Image Selection Process

1. **Find all images**
   - Use `glob()` to find all files in `img/*/fullsize/*` paths
   - Filter by file extension (case-insensitive)
   - Store full paths in array

2. **Random selection**
   - Use `array_rand()` to select TARGET_COUNT images from pool
   - If total images < TARGET_COUNT, show all available
   - Naturally weighted by directory size (more images = higher representation)

3. **Shuffle for display**
   - Shuffle selected images to avoid directory grouping

### Performance

With ~3,000 images:
- glob() scanning: Fast, just listing files
- Memory: ~150-300KB for paths (negligible)
- array_rand(): O(35) operation
- Expected load time: <1 second

## HTML Output

### Page Structure

Standalone HTML page (no site navigation includes):
- Simple header with title and count
- Image grid using existing CSS
- Link to `css/styles.css` for styling

### Grid Layout

Uses existing `.item` class and CSS Grid (4-column responsive):
```html
<div class="item" style="aspect-ratio: 1/1;">
  <img src="img/.../preview/image.webp">
  <a href="img/.../fullsize/image.webp" download>Download</a>
</div>
```

### Image Paths

- **Display:** Preview version (`img/.../preview/filename.webp`)
- **Download:** Fullsize version (`img/.../fullsize/filename.webp`)
- Convert paths by replacing `/fullsize/` with `/preview/`

### Responsive Breakpoints

Existing CSS handles:
- 4 columns: desktop (>1024px)
- 3 columns: tablet (640-1024px)
- 2 columns: mobile (<640px)

## Edge Cases

1. **Fewer images than target**
   - Display all available images
   - Show actual count in header

2. **Missing preview images**
   - Assume preview exists for every fullsize image
   - Based on existing collection structure

3. **No images found**
   - Show simple message: "No images found"

4. **File path structure**
   - Pattern: `img/{category}/fullsize/{filename}`
   - Preview mirrors at `img/{category}/preview/{filename}`

## Technical Notes

- All images in collection are webp format
- Reuses existing CSS (styles.css)
- No new styles needed
- Minimal inline CSS only if necessary for download links
- No external dependencies

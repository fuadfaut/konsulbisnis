<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="blog-single-wrapper" style="background-color: #fff; min-height: 100vh;">
    <!-- Detail Header / Hero -->
    <div class="blog-hero" style="position: relative; height: 400px; width: 100%; background-color: #0f172b; overflow: hidden;">
        <?php if ( has_post_thumbnail() ) : ?>
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.4; position: absolute; top: 0; left: 0;">
        <?php else: ?>
            <div style="width: 100%; height: 100%; background: linear-gradient(135deg, #1e3a8a 0%, #0f172b 100%);"></div>
        <?php endif; ?>
        
        <!-- Gradient Overlay -->
        <div style="position: absolute; inset: 0; background: linear-gradient(to top, #0f172b 0%, transparent 50%, transparent 100%);"></div>
        
        <!-- Back Button - Positioned within max-width container -->
        <div style="position: absolute; top: 24px; left: 0; right: 0; z-index: 20;">
            <div style="max-width: 1080px; margin: 0 auto; padding: 0 24px;">
                <a href="<?php echo home_url('/blog'); ?>" style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.1); backdrop-filter: blur(12px); color: white; padding: 8px 16px; border-radius: 9999px; font-size: 14px; font-weight: 500; text-decoration: none; border: 1px solid rgba(255,255,255,0.1); transition: background 0.2s;" onmouseover="this.style.background='rgba(255,255,255,0.2)'" onmouseout="this.style.background='rgba(255,255,255,0.1)'">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>

        <!-- Hero Content -->
        <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 24px; z-index: 10;">
            <div style="max-width: 1080px; margin: 0 auto; padding: 0 24px;">
                <?php 
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) :
                ?>
                <span style="display: inline-block; background-color: #2563eb; color: white; padding: 4px 12px; border-radius: 4px; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 16px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);">
                    <?php echo esc_html( $categories[0]->name ); ?>
                </span>
                <?php endif; ?>
                
                <h1 style="font-size: clamp(1.875rem, 4vw, 3rem); font-weight: 700; color: white; margin-bottom: 24px; line-height: 1.2; text-shadow: 0 2px 10px rgba(0,0,0,0.3);"><?php the_title(); ?></h1>
                
                <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 16px; font-size: 14px; color: #cbd5e1;">
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <div style="width: 32px; height: 32px; border-radius: 9999px; background: rgba(255,255,255,0.2); display: flex; align-items: center; justify-content: center; overflow: hidden;">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                        </div>
                        <span><?php the_author(); ?></span>
                    </div>
                    <span>&bull;</span>
                    <span><?php echo get_the_date('d M Y'); ?></span>
                    <span>&bull;</span>
                    <span><?php echo ceil(str_word_count(strip_tags(get_the_content())) / 200); ?> min read</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Layout Content & Sidebar -->
    <div style="max-width: 1080px; margin: 0 auto; padding: 48px 24px;">
        <div style="display: grid; grid-template-columns: 1fr; gap: 48px;" class="blog-content-grid">
            
            <!-- MAIN CONTENT (Left) -->
            <div class="blog-main-content">
                <article id="article-content" class="prose prose-lg prose-slate" style="max-width: none; color: #475569; line-height: 1.75;">
                    <?php the_content(); ?>
                </article>
                
                <!-- Author Bio Box -->
                <div style="margin-top: 64px; background-color: #f8fafc; padding: 32px; border-radius: 16px; border: 1px solid #f1f5f9; display: flex; align-items: flex-start; gap: 16px; flex-wrap: wrap;">
                    <div style="width: 64px; height: 64px; border-radius: 9999px; background-color: #dbeafe; flex-shrink: 0; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?>
                    </div>
                    <div style="flex: 1; min-width: 200px;">
                        <h4 style="font-weight: 700; color: #0f172b; font-size: 18px; margin: 0 0 4px 0;"><?php the_author(); ?></h4>
                        <p style="color: #2563eb; font-size: 14px; font-weight: 500; margin: 0 0 8px 0;">Author</p>
                        <p style="color: #64748b; font-size: 14px; margin: 0; line-height: 1.6;"><?php echo get_the_author_meta('description') ?: 'Penulis aktif yang gemar membagikan wawasan seputar dunia digital dan teknologi terbaru.'; ?></p>
                    </div>
                </div>
            </div>

            <!-- SIDEBAR (Right - Sticky TOC) -->
            <div class="blog-sidebar">
                <div style="position: sticky; top: 100px;">
                    <!-- TOC Box -->
                    <div style="background-color: white; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05); padding: 24px;">
                        <h3 style="font-weight: 700; color: #0f172b; margin: 0 0 16px 0; padding-bottom: 12px; border-bottom: 1px solid #f1f5f9; display: flex; align-items: center; gap: 8px; font-size: 16px;">
                            <i class="fas fa-list-ul" style="color: #3b82f6;"></i> Daftar Isi
                        </h3>
                        
                        <!-- TOC Container -->
                        <nav id="toc-container" style="display: flex; flex-direction: column; gap: 4px; max-height: 60vh; overflow-y: auto;">
                            <!-- Links generated by JS -->
                        </nav>
                    </div>

                    <!-- Share Box -->
                    <div style="margin-top: 24px;">
                        <p style="font-size: 11px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.05em; margin: 0 0 12px 0;">Bagikan Artikel</p>
                        <div style="display: flex; gap: 8px;">
                            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener" style="flex: 1; padding: 10px 0; background-color: #1DA1F2; color: white; border-radius: 8px; text-align: center; text-decoration: none; transition: opacity 0.2s;" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener" style="flex: 1; padding: 10px 0; background-color: #4267B2; color: white; border-radius: 8px; text-align: center; text-decoration: none; transition: opacity 0.2s;" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://wa.me/?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>" target="_blank" rel="noopener" style="flex: 1; padding: 10px 0; background-color: #25D366; color: white; border-radius: 8px; text-align: center; text-decoration: none; transition: opacity 0.2s;" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
/* Blog Single Responsive Grid */
@media (min-width: 1024px) {
    .blog-content-grid {
        grid-template-columns: 1fr 300px !important;
    }
}

/* Hide sidebar on mobile */
@media (max-width: 1023px) {
    .blog-sidebar {
        display: none;
    }
}

/* TOC Link Styles */
.toc-link {
    display: block;
    font-size: 14px;
    color: #64748b;
    padding: 8px 12px;
    border-radius: 0 6px 6px 0;
    border-left: 2px solid transparent;
    text-decoration: none;
    transition: all 0.2s;
}

.toc-link:hover {
    color: #2563eb;
    background-color: #f1f5f9;
}

.toc-link.active {
    color: #2563eb;
    border-left-color: #2563eb;
    background-color: #eff6ff;
    font-weight: 600;
}

/* Prose overrides for blog content */
#article-content h2 {
    font-size: 1.75rem;
    font-weight: 700;
    color: #1e293b;
    margin-top: 2.5rem;
    margin-bottom: 1rem;
    scroll-margin-top: 5rem;
}

#article-content h3 {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1e293b;
    margin-top: 2.5rem;
    margin-bottom: 1rem;
    scroll-margin-top: 5rem;
}

#article-content p {
    margin-bottom: 1.5rem;
    line-height: 1.75;
    color: #475569;
}

#article-content ul,
#article-content ol {
    padding-left: 1.5rem;
    margin-bottom: 1.5rem;
    color: #475569;
}

#article-content ul {
    list-style-type: disc;
}

#article-content ol {
    list-style-type: decimal;
}

#article-content li {
    margin-bottom: 0.5rem;
}

#article-content blockquote {
    border-left: 4px solid #3b82f6;
    padding: 1rem 1.5rem;
    font-style: italic;
    color: #334155;
    background: #eff6ff;
    border-radius: 0 0.5rem 0.5rem 0;
    margin: 2rem 0;
}

#article-content figure {
    margin: 2.5rem 0;
}

#article-content img {
    border-radius: 0.75rem;
    width: 100%;
    height: auto;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
}

#article-content figcaption {
    text-align: center;
    font-size: 0.875rem;
    color: #64748b;
    margin-top: 0.75rem;
    font-style: italic;
}

#article-content a {
    color: #2563eb;
    text-decoration: underline;
}

#article-content a:hover {
    color: #1d4ed8;
}

#article-content strong {
    font-weight: 600;
    color: #1e293b;
}

#article-content em {
    font-style: italic;
}

#article-content code {
    background: #f1f5f9;
    padding: 0.2rem 0.4rem;
    border-radius: 0.25rem;
    font-size: 0.875em;
    color: #dc2626;
}

#article-content pre {
    background: #1e293b;
    color: #e2e8f0;
    padding: 1.5rem;
    border-radius: 0.5rem;
    overflow-x: auto;
    margin: 1.5rem 0;
}

#article-content pre code {
    background: transparent;
    padding: 0;
    color: inherit;
}

/* No scrollbar utility */
.no-scrollbar::-webkit-scrollbar {
    display: none;
}
.no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // --- GENERATE TOC ---
    const contentDiv = document.getElementById('article-content');
    const tocContainer = document.getElementById('toc-container');
    
    if (!contentDiv || !tocContainer) return;

    // Find all H2 and H3 headers in article
    const headers = contentDiv.querySelectorAll('h2, h3');
    
    if (headers.length === 0) {
        tocContainer.innerHTML = '<p style="font-size: 14px; color: #94a3b8; font-style: italic;">Tidak ada sub-judul.</p>';
        return;
    }

    // Loop and create links
    headers.forEach((header, index) => {
        // Give ID to header if missing
        const id = header.id || `section-${index}`;
        header.id = id;

        // Create Link
        const link = document.createElement('a');
        link.href = `#${id}`;
        link.innerText = header.innerText;
        link.className = 'toc-link';
        
        // Smooth Scroll Event
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const yOffset = -100;
            const y = header.getBoundingClientRect().top + window.pageYOffset + yOffset;
            
            window.scrollTo({top: y, behavior: 'smooth'});
            
            // Set active class
            document.querySelectorAll('.toc-link').forEach(l => l.classList.remove('active'));
            link.classList.add('active');
        });

        tocContainer.appendChild(link);
    });

    // Scroll Spy
    window.addEventListener('scroll', () => {
        let current = '';
        headers.forEach(header => {
            const headerTop = header.offsetTop;
            if (window.scrollY >= headerTop - 150) {
                current = header.getAttribute('id');
            }
        });

        document.querySelectorAll('.toc-link').forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    });
});
</script>

<?php endwhile; ?>

<?php get_footer(); ?>

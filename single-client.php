<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); 
    $category = get_post_meta( get_the_ID(), 'client_category', true );
    $project_desc = get_post_meta( get_the_ID(), 'client_project_desc', true );
?>

<div class="client-single-wrapper" style="background-color: #fff; min-height: 100vh;">
    <!-- Detail Header / Hero -->
    <div class="client-hero" style="position: relative; height: 350px; width: 100%; background-color: #0f172b; overflow: hidden;">
        <!-- Background Pattern -->
        <div style="position: absolute; inset: 0; background: linear-gradient(135deg, #1e3a8a 0%, #0f172b 100%);"></div>
        
        <!-- Gradient Overlay -->
        <div style="position: absolute; inset: 0; background: linear-gradient(to top, #0f172b 0%, transparent 50%, transparent 100%);"></div>
        
        <!-- Back Button - Aligned with content grid -->
        <div style="position: absolute; top: 24px; left: 0; right: 0; z-index: 20; padding: 0 24px;">
            <div style="max-width: 1032px; margin: 0 auto;">
                <a href="<?php echo get_post_type_archive_link('client'); ?>" style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.15); backdrop-filter: blur(12px); color: white; padding: 10px 20px; border-radius: 8px; font-size: 14px; font-weight: 600; text-decoration: none; border: 1px solid rgba(255,255,255,0.2); transition: all 0.2s;" onmouseover="this.style.background='rgba(255,255,255,0.25)'" onmouseout="this.style.background='rgba(255,255,255,0.15)'">
                    <i class="fas fa-arrow-left"></i> Semua Klien
                </a>
            </div>
        </div>

        <!-- Hero Content - Aligned with content grid -->
        <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 32px 24px; z-index: 10;">
            <div style="max-width: 1032px; margin: 0 auto;">
                <?php if($category): ?>
                <span style="display: inline-block; background-color: #f59e0b; color: #0f172b; padding: 6px 14px; border-radius: 6px; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 16px;">
                    <?php echo esc_html($category); ?>
                </span>
                <?php endif; ?>
                
                <h1 style="font-size: clamp(2rem, 4vw, 2.75rem); font-weight: 800; color: white; margin-bottom: 12px; line-height: 1.2;"><?php the_title(); ?></h1>
                
                <?php if(has_excerpt()): ?>
                <p style="color: #cbd5e1; font-size: 16px; max-width: 650px; line-height: 1.7; margin: 0;"><?php echo get_the_excerpt(); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Layout Content & Sidebar - Same max-width as hero -->
    <div style="max-width: 1032px; margin: 0 auto; padding: 48px 24px;">
        <div style="display: grid; grid-template-columns: 1fr; gap: 40px;" class="client-content-grid">
            
            <!-- MAIN CONTENT (Left) -->
            <div class="client-main-content">
                
                <!-- Client Logo Card -->
                <?php if ( has_post_thumbnail() ) : ?>
                <div style="background: #f8fafc; border-radius: 16px; padding: 32px; margin-bottom: 32px; text-align: center; border: 1px solid #e2e8f0;">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title_attribute(); ?>" style="max-height: 120px; width: auto; margin: 0 auto;">
                </div>
                <?php endif; ?>
                
                <!-- Project Overview -->
                <?php if($project_desc): ?>
                <div style="background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%); border-left: 4px solid #2563eb; padding: 24px; margin-bottom: 32px; border-radius: 0 12px 12px 0;">
                    <h4 style="color: #1e40af; font-weight: 700; margin: 0 0 8px 0; font-size: 14px; text-transform: uppercase; letter-spacing: 0.05em;">
                        <i class="fas fa-briefcase" style="margin-right: 8px;"></i>Ringkasan Proyek
                    </h4>
                    <p style="color: #1e3a8a; margin: 0; font-size: 16px; line-height: 1.6;"><?php echo esc_html($project_desc); ?></p>
                </div>
                <?php endif; ?>
                
                <!-- Article Content -->
                <article id="article-content" class="prose prose-lg prose-slate" style="max-width: none; color: #475569; line-height: 1.75;">
                    <?php the_content(); ?>
                </article>
                
                <!-- Navigation -->
                <div style="border-top: 1px solid #e2e8f0; margin-top: 48px; padding-top: 32px;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 24px;">
                        <div style="flex: 1; min-width: 200px;">
                            <?php 
                            $prev_post = get_previous_post();
                            if ($prev_post) : 
                            ?>
                            <a href="<?php echo get_permalink($prev_post); ?>" style="display: block; text-decoration: none;">
                                <span style="font-size: 12px; color: #94a3b8; display: block; margin-bottom: 4px;">
                                    <i class="fas fa-arrow-left" style="margin-right: 4px;"></i> Klien Sebelumnya
                                </span>
                                <span style="font-weight: 600; color: #1e293b; display: block; transition: color 0.2s;" onmouseover="this.style.color='#2563eb'" onmouseout="this.style.color='#1e293b'"><?php echo get_the_title($prev_post); ?></span>
                            </a>
                            <?php endif; ?>
                        </div>
                        <div style="flex: 1; min-width: 200px; text-align: right;">
                            <?php 
                            $next_post = get_next_post();
                            if ($next_post) : 
                            ?>
                            <a href="<?php echo get_permalink($next_post); ?>" style="display: block; text-decoration: none;">
                                <span style="font-size: 12px; color: #94a3b8; display: block; margin-bottom: 4px;">
                                    Klien Selanjutnya <i class="fas fa-arrow-right" style="margin-left: 4px;"></i>
                                </span>
                                <span style="font-weight: 600; color: #1e293b; display: block; transition: color 0.2s;" onmouseover="this.style.color='#2563eb'" onmouseout="this.style.color='#1e293b'"><?php echo get_the_title($next_post); ?></span>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SIDEBAR (Right) -->
            <div class="client-sidebar">
                <div style="position: sticky; top: 100px;">
                    <!-- Client Info Card -->
                    <div style="background-color: white; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05); padding: 24px; margin-bottom: 24px;">
                        <h3 style="font-weight: 700; color: #0f172b; margin: 0 0 16px 0; padding-bottom: 12px; border-bottom: 1px solid #f1f5f9; display: flex; align-items: center; gap: 8px; font-size: 16px;">
                            <i class="fas fa-building" style="color: #3b82f6;"></i> Informasi Klien
                        </h3>
                        
                        <div style="display: flex; flex-direction: column; gap: 16px;">
                            <div>
                                <span style="font-size: 11px; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.05em; display: block; margin-bottom: 4px;">Nama Perusahaan</span>
                                <span style="font-weight: 600; color: #1e293b;"><?php the_title(); ?></span>
                            </div>
                            <?php if($category): ?>
                            <div>
                                <span style="font-size: 11px; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.05em; display: block; margin-bottom: 4px;">Kategori</span>
                                <span style="display: inline-block; background: #eff6ff; color: #2563eb; padding: 4px 12px; border-radius: 9999px; font-size: 13px; font-weight: 500;"><?php echo esc_html($category); ?></span>
                            </div>
                            <?php endif; ?>
                            <div>
                                <span style="font-size: 11px; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.05em; display: block; margin-bottom: 4px;">Tanggal Ditambahkan</span>
                                <span style="font-weight: 500; color: #64748b;"><?php echo get_the_date('d M Y'); ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Card -->
                    <div style="background: linear-gradient(135deg, #1e40af 0%, #0f172b 100%); border-radius: 16px; padding: 24px; color: white;">
                        <h4 style="font-weight: 700; font-size: 18px; margin: 0 0 8px 0;">Ingin Hasil Serupa?</h4>
                        <p style="font-size: 14px; color: #cbd5e1; margin: 0 0 20px 0; line-height: 1.5;">Konsultasikan kebutuhan bisnis Anda bersama kami.</p>
                        <a href="https://wa.me/<?php echo esc_attr( get_theme_mod( 'whatsapp_number', '6285124945494' ) ); ?>?text=Halo%20saya%20tertarik%20dengan%20layanan%20seperti%20yang%20diberikan%20untuk%20<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener" style="display: flex; align-items: center; justify-content: center; gap: 8px; width: 100%; background: #f59e0b; color: #0f172b; padding: 12px 16px; border-radius: 8px; font-weight: 700; text-decoration: none; transition: background 0.2s;" onmouseover="this.style.background='#fbbf24'" onmouseout="this.style.background='#f59e0b'">
                            <i class="fab fa-whatsapp"></i> Hubungi Kami
                        </a>
                    </div>

                    <!-- Share Box -->
                    <div style="margin-top: 24px;">
                        <p style="font-size: 11px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.05em; margin: 0 0 12px 0;">Bagikan</p>
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
/* Client Single Responsive Grid */
@media (min-width: 1024px) {
    .client-content-grid {
        grid-template-columns: 1fr 300px !important;
    }
}

/* Hide sidebar on mobile */
@media (max-width: 1023px) {
    .client-sidebar {
        display: none;
    }
}

/* Prose overrides for client content */
#article-content h2 {
    font-size: 1.75rem;
    font-weight: 700;
    color: #1e293b;
    margin-top: 2.5rem;
    margin-bottom: 1rem;
}

#article-content h3 {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1e293b;
    margin-top: 2rem;
    margin-bottom: 0.75rem;
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

#article-content img {
    border-radius: 0.75rem;
    width: 100%;
    height: auto;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    margin: 1.5rem 0;
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

#article-content blockquote {
    border-left: 4px solid #3b82f6;
    padding: 1rem 1.5rem;
    font-style: italic;
    color: #334155;
    background: #eff6ff;
    border-radius: 0 0.5rem 0.5rem 0;
    margin: 2rem 0;
}
</style>

<?php endwhile; ?>

<?php get_footer(); ?>

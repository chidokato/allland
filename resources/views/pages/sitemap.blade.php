<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc>{{asset('')}}</loc>
        <changefreq>always</changefreq>
        <priority>1</priority>
    </url>
    
    @foreach ($sitemap_category as $val)
    <url>
        <loc>{{asset('')}}{{$val->slug}}</loc>
        <changefreq>always</changefreq>
        <priority>{{$val->sitemap}}</priority>
    </url>
    @endforeach
	
	@foreach ($sitemap_city as $val)
    <url>
        <loc>{{asset('')}}location/{{$val->slug}}</loc>
        <changefreq>always</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach
	
	@foreach ($sitemap_district as $val)
    <url>
        <loc>{{asset('')}}location/{{$val->city->slug}}/{{$val->slug}}</loc>
        <changefreq>always</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach
	
	@foreach ($sitemap_product as $val)
    <url>
        <loc>{{asset('')}}{{$val->category->slug}}/{{$val->slug}}.html</loc>
        <changefreq>always</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach
	
	@foreach ($sitemap_news as $val)
    <url>
        <loc>{{asset('')}}{{$val->category->slug}}/{{$val->slug}}/{{$val->id}}.html</loc>
        <changefreq>always</changefreq>
        <priority>0.7</priority>
    </url>
    @endforeach
</urlset>
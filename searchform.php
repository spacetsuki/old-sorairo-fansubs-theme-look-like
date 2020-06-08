<form class="form-inline my-2 my-lg-0 ml-auto" role="search" method="get" action="<?= home_url('/'); ?>">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value="<?= get_search_query() ?>" name="s" title="search">
    <button class="btn btn-primary my-2 my-sm-0" type="submit" value="Search">Search</button>
</form>
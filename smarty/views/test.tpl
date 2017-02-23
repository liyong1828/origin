{section name=test loop=$data start=0 step=1}

    id:<{$data[test].id}><br/>
    name:<{$data[test].name}><br/><br/>
    {sectionelse}
    数组为空
{/section}

{foreach from=$data item="test"}
    id:{$test.id}
{/foreach}
{foreach from=$data item="test"}

{/foreach}

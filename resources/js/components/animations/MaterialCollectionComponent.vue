<script>
export default {
    functional: true,
    render: function(createElement, contex){
        var data = {
            ...contex.data,
            css: false,
            on:{
                beforeEnter: function(el){
                    el.style.opacity = 0;
                    el.style.transform = "scale(0)";
                    el.style.transition = "all 0.2s cubic-bezier(0.4, 0.0, 0.2, 1)"
                },
                enter: function(el){
                    const delay = 150 * el.dataset.index;
                    setTimeout(()=>{
                        el.style.opacity = 1;
                        el.style.transform = "scale(1)";
                    },delay)
                    
                },
                leave: function(el){
                    const delay = 150 * el.dataset.index;
                    setTimeout(()=>{
                        el.style.opacity = 1;
                        el.style.transform = "scale(1)";
                    },delay)
                }
            }
        };
        return createElement('transition-group', data, contex.children);
    },
}
</script>
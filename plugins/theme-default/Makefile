ASSETS = \
	static/default.css


static/default.css: assets/theme-default.less
	../../node_modules/.bin/lessc $< > $@

assets: $(ASSETS)

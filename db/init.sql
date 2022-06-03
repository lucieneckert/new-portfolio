
CREATE TABLE projects (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    name TEXT NOT NULL UNIQUE,
    thumbnail_path TEXT NOT NULL UNIQUE,
    page_url TEXT NOT NULL UNIQUE
);

CREATE TABLE categories (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    name TEXT NOT NULL UNIQUE
);

CREATE TABLE project_categories (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    project_id INTEGER NOT NULL,
    category_id INTEGER NOT NULL,
    FOREIGN KEY (project_id) REFERENCES projects(id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

CREATE TABLE tools (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    name TEXT NOT NULL UNIQUE
);

CREATE TABLE project_tools (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    project_id INTEGER NOT NULL,
    tool_id INTEGER NOT NULL,
    FOREIGN KEY (project_id) REFERENCES projects(id),
    FOREIGN KEY (tool_id) REFERENCES tools(id)
);


-- create categories
INSERT INTO categories (name) VALUES ("game development"), ("coding projects"), ("web development"), ("music"); 
-- create tools
INSERT INTO tools (name)
VALUES
    ('Java'),
    ('LMMS'),
    ('GIMP'),
    ('Paint.NET'),
    ('Godot Engine'),
    ('Unity Engine'),
    ('Blender'),
    ('Ableton'),
    ('C++'),
    ('Python'),
    ('Jupyter Notebooks'),
    ('OCaml'),
    ('PyTorch')
;
-- game dev
INSERT INTO projects (name, thumbnail_path, page_url) 
VALUES 
    ('Ragdoll Royale', 'ragdoll.png', 'rr'),
    ('Springs with Guns', 'springs.png', 'swg'),
    ('Enjoyable Block Game', 'blocks.png', 'ebg'),
    ('A Small Game About Juiceboxes', 'juiceboxes.png', 'jb'),
    ('Parole in One', 'golf.png', 'pio')
;
INSERT INTO project_categories (project_id, category_id) VALUES (0, 0), (1, 0), (2, 0), (3, 0), (4, 0);
INSERT INTO project_tools (project_id, tool_id)
VALUES
    (0, 2), (0, 7), (0, 8),
    (1, 1), (1, 3), (1, 4),
    (2, 1), (2, 3), (2, 4),
    (3, 1), (3, 3), (3, 4),
    (4, 0), (4, 1), (4, 2)
;
-- coding projects
INSERT INTO projects (name, thumbnail_path, page_url)
VALUES 
    ('Generating Pokemon Sprites with a GAN', 'pokemon.png', 'pokegan'),
    ('CamlClimbers: Tetris variant in OCaml', 'camls.png', 'caml-climbers'),
    ('Random Mystery Dungeon Generator', 'dungeons.png', 'random-md')
;
INSERT INTO project_categories (project_id, category_id) VALUES (5, 1), (6, 1), (7, 1);
INSERT INTO project_tools (project_id, tool_id)
VALUES
    (5, 9), (5, 10), (5, 12),
    (6, 11),
    (7, 9)
;
-- web dev
INSERT INTO projects (name, thumbnail_path, page_url)
VALUES 
    ('Misc. Web Dev Projects', 'webdev.png', 'webdev')
;
INSERT INTO project_categories (project_id, category_id) VALUES (8, 2);
-- music
INSERT INTO projects (name, thumbnail_path, page_url)
VALUES 
    ('Ragdoll Royale OST', 'rr-ost.png', 'rr-ost'),
    ('A Small Game About Juiceboxes OST', 'jb-ost', 'jb-ost'),
    ('Parole in One OST', 'pio-ost.png', 'pio-ost')
;
INSERT INTO project_categories (project_id, category_id) VALUES (9, 3), (10, 3), (11, 3);
INSERT INTO project_tools (project_id, tool_id)
VALUES
    (9, 7), (10, 1), (11, 1)
;


